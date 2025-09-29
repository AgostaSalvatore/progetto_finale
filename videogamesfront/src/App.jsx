import { BrowserRouter as Router, Routes, Route } from 'react-router-dom'
import Header from './components/Header'
import Footer from './components/Footer'
import GamesList from './components/GamesList'
import GameDetail from './components/GameDetail'
import './App.css'

function App() {
  return (
    <Router>
      <div className="app">
        <Header />
        
        <main className="app-main">
          <Routes>
            <Route path="/" element={<GamesList />} />
            <Route path="/game/:id" element={<GameDetail />} />
          </Routes>
        </main>

        <Footer />
      </div>
    </Router>
  )
}

export default App
