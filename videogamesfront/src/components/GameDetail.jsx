import { useState, useEffect } from 'react';
import { useParams, useNavigate } from 'react-router-dom';
import { gameService } from '../services/api';
import './GameDetail.css';

const GameDetail = () => {
  const { id: gameId } = useParams();
  const navigate = useNavigate();
  const [game, setGame] = useState(null);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);

  useEffect(() => {
    if (gameId) {
      fetchGameDetail();
    }
  }, [gameId]);

  const fetchGameDetail = async () => {
    try {
      setLoading(true);
      const gameData = await gameService.getGameById(gameId);
      setGame(gameData);
      setError(null);
    } catch (err) {
      setError('Errore nel caricamento del gioco.');
      console.error('Error fetching game detail:', err);
    } finally {
      setLoading(false);
    }
  };

  const formatPrice = (price) => {
    return new Intl.NumberFormat('it-IT', {
      style: 'currency',
      currency: 'EUR'
    }).format(price);
  };

  const formatDate = (dateString) => {
    return new Date(dateString).toLocaleDateString('it-IT', {
      year: 'numeric',
      month: 'long',
      day: 'numeric'
    });
  };

  if (loading) {
    return (
      <div className="game-detail-container">
        <div className="loading-spinner">
          <div className="spinner"></div>
          <p>Caricamento dettagli gioco...</p>
        </div>
      </div>
    );
  }

  if (error || !game) {
    return (
      <div className="game-detail-container">
        <div className="error-message">
          <h2>⚠️ Errore</h2>
          <p>{error || 'Gioco non trovato'}</p>
          <button onClick={() => navigate('/')} className="back-button">
            Torna alla lista
          </button>
        </div>
      </div>
    );
  }

  return (
    <div className="game-detail-container">
      <button onClick={() => navigate('/')} className="back-button">
        ← Torna alla lista
      </button>

      <div className="game-detail-content">
        <div className="game-detail-header">
          <div className="game-detail-image">
            {game.cover_image ? (
              <img 
                src={`http://127.0.0.1:8000/storage/${game.cover_image}`} 
                alt={game.title}
                onError={(e) => {
                  e.target.src = 'http://127.0.0.1:8000/storage/cover_images/placeholder.png';
                }}
              />
            ) : (
              <img 
                src="http://127.0.0.1:8000/storage/cover_images/placeholder.png" 
                alt={game.title}
              />
            )}
          </div>

          <div className="game-detail-info">
            <h1 className="game-detail-title">{game.title}</h1>
            
            <div className="game-detail-meta">
              <div className="meta-item">
                <span className="meta-label">Prezzo:</span>
                <span className="meta-value price">{formatPrice(game.price)}</span>
              </div>
              
              <div className="meta-item">
                <span className="meta-label">Data di rilascio:</span>
                <span className="meta-value">{formatDate(game.release_date)}</span>
              </div>
              
              {game.software_house && (
                <div className="meta-item">
                  <span className="meta-label">Sviluppatore:</span>
                  <span className="meta-value">{game.software_house.name}</span>
                </div>
              )}
            </div>

            {game.genres && game.genres.length > 0 && (
              <div className="game-detail-genres">
                <h3>Generi</h3>
                <div className="genres-list">
                  {game.genres.map(genre => (
                    <span key={genre.id} className="genre-tag">
                      {genre.name}
                    </span>
                  ))}
                </div>
              </div>
            )}
          </div>
        </div>

        <div className="game-detail-description">
          <h3>Descrizione</h3>
          <p>{game.description || 'Nessuna descrizione disponibile.'}</p>
        </div>

        <div className="game-detail-actions">
          <button className="purchase-button">
            Acquista per {formatPrice(game.price)}
          </button>
          <button className="wishlist-button">
            Aggiungi alla wishlist
          </button>
        </div>
      </div>
    </div>
  );
};

export default GameDetail;
