import axios from 'axios'

const request  = axios.create({
//   baseURL: process.env.APP_URL,
  headers: {
    'Content-Type': 'application/json'
  }
})

export default request
