var fs = require('fs');

const { IgApiClient } = require('instagram-private-api')
require('dotenv').config()
const { readFile, read, unlinkSync }= require('fs')
const { promisify } = require('util')
const readFileAsync = promisify(readFile)


const ig = new IgApiClient()

var contents = fs.readFileSync('kataig.txt').toString();

const postimage = async () => {
    try { 
        ig.state.generateDevice(process.env.IG_USERNAME)
        await ig.simulate.preLoginFlow()
        const user = await ig.account.login(process.env.IG_USERNAME, process.env.IG_PASSWORD) 

       
        const path = './upload.jpg'
        const published = await ig.publish.photo({
            file: await readFileAsync(path),
            caption: contents
            
        
        })
        
        console.log(published)
    } catch (error) {
        console.log(error)
    }
}

postimage()