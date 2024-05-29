import React from 'react'
import ReactDOM from 'react-dom/client'
import App from './App.jsx'
import {NextUIProvider} from '@nextui-org/react'

ReactDOM.createRoot(document.getElementById('react-root')).render(
  <React.StrictMode>
    <NextUIProvider>
      <App />
    </NextUIProvider>
  </React.StrictMode>,
)
