import './Footer.css'

const Footer = () => {
  return (
    <footer className="app-footer">
      <div className="footer-content">
        <div className="footer-section">
          <h3>GameStore</h3>
          <p>Il tuo negozio di videogiochi online di fiducia</p>
        </div>
        
        <div className="footer-section">
          <h4>Links</h4>
          <ul>
            <li><a href="/">Catalogo</a></li>
            <li><a href="#about">Chi Siamo</a></li>
            <li><a href="#contact">Contatti</a></li>
          </ul>
        </div>
        
        <div className="footer-section">
          <h4>Supporto</h4>
          <ul>
            <li><a href="#help">Centro Assistenza</a></li>
            <li><a href="#returns">Resi</a></li>
            <li><a href="#shipping">Spedizioni</a></li>
          </ul>
        </div>
      </div>
      
      <div className="footer-bottom">
        <p>&copy; 2024 GameStore. Tutti i diritti riservati.</p>
      </div>
    </footer>
  )
}

export default Footer
