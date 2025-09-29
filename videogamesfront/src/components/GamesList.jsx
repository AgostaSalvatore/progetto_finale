import { useState, useEffect } from 'react';
import GameCard from './GameCard';
import { gameService } from '../services/api';
import './GamesList.css';

const GamesList = () => {
  const [games, setGames] = useState([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);
  const [searchTerm, setSearchTerm] = useState('');

  useEffect(() => {
    fetchGames();
  }, []);

  const fetchGames = async () => {
    try {
      setLoading(true);
      const gamesData = await gameService.getAllGames();
      setGames(gamesData);
      setError(null);
    } catch (err) {
      setError('Errore nel caricamento dei giochi. Assicurati che il server sia attivo.');
      console.error('Error fetching games:', err);
    } finally {
      setLoading(false);
    }
  };

  const filteredGames = games.filter(game =>
    game.title.toLowerCase().includes(searchTerm.toLowerCase()) ||
    (game.description && game.description.toLowerCase().includes(searchTerm.toLowerCase()))
  );

  if (loading) {
    return (
      <div className="games-list-container">
        <div className="loading-spinner">
          <div className="spinner"></div>
          <p>Caricamento giochi...</p>
        </div>
      </div>
    );
  }

  if (error) {
    return (
      <div className="games-list-container">
        <div className="error-message">
          <h2>⚠️ Errore</h2>
          <p>{error}</p>
          <button onClick={fetchGames} className="retry-button">
            Riprova
          </button>
        </div>
      </div>
    );
  }

  return (
    <div className="games-list-container">
      <div className="games-header">
        <h1>Catalogo Videogiochi</h1>
        <p>Scopri la nostra collezione di {games.length} giochi</p>
        
        <div className="search-container">
          <input
            type="text"
            placeholder="Cerca giochi..."
            value={searchTerm}
            onChange={(e) => setSearchTerm(e.target.value)}
            className="search-input"
          />
        </div>
      </div>

      {filteredGames.length === 0 ? (
        <div className="no-games">
          <h3>Nessun gioco trovato</h3>
          <p>Prova a modificare i termini di ricerca</p>
        </div>
      ) : (
        <>
          <div className="games-stats">
            Mostrando {filteredGames.length} di {games.length} giochi
          </div>
          
          <div className="games-grid">
            {filteredGames.map(game => (
              <GameCard
                key={game.id}
                game={game}
              />
            ))}
          </div>
        </>
      )}
    </div>
  );
};

export default GamesList;
