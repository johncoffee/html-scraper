import { get, IncomingMessage } from 'http'
import { URL } from 'url'
import { JSDOM } from 'jsdom'

function getArticles(url:string):Promise<string> {

  return new Promise(((resolve, reject) => {

    const urlObj = new URL(url)

    get({
      hostname: urlObj.hostname,
      port: urlObj.port,
      path: urlObj.pathname,
      agent: false  // create a new agent just for this one request
    }, (res:IncomingMessage) => {
      let stuff:string = ''

      res.on('data', data => {
        stuff += data.toString()
      })

      res.on('error', err => {
        reject(err)
      })

      res.on('end', () => {
        resolve(stuff)
      })

    });


  }))
}


(async function () {

  try {
    const res = await getArticles("http://localhost:3000/test.php")

    const dom = new JSDOM(res, {})

    const document = dom.window.document

    // beware! Here be dragons
    const articles = Array.from( document.querySelectorAll(`.item`) )
      .map( article => { return { _el: article } })
      .map( article => { return { ...article, datetime: article._el.querySelector(`[datetime]`).getAttribute('datetime') } })
      .map( article => { return { ...article, heading: article._el.querySelector(`[class*=heading]`).textContent } })

    console.log(`Found ${articles.length} articles`)
    console.log(articles)
  }
  catch (e) {
    console.error(e)
  }

}())


