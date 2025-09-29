import { Link, useLocation } from 'react-router-dom'
import './Header.css'

const Header = () => {
  const location = useLocation()

  return (
    <header className="app-header">
      <div className="header-content">
        <Link to="/" className="header-logo">
          <h1 className="app-title">🎮 GameStore</h1>
          <p className="app-subtitle">Il tuo negozio di videogiochi online</p>
        </Link>
        
        <nav className="header-nav">
          <Link 
            to="/" 
            className={`nav-link ${location.pathname === '/' ? 'active' : ''}`}
          >
            Catalogo
          </Link>
        </nav>
      </div>
    </header>
  )
}

export default Header
