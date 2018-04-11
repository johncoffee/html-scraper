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

    const window = dom.window

    const articles = Array.from(window.document.querySelectorAll('article.node-article'))

    console.log(`Found ${articles.length} articles`)
  }
  catch (e) {
    console.error(e)
  }

}())


