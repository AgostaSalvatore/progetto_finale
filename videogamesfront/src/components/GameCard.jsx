import { Link } from 'react-router-dom'
import './GameCard.css';

const GameCard = ({ game }) => {
  const formatPrice = (price) => {
    return new Intl.NumberFormat('it-IT', {
      style: 'currency',
      currency: 'EUR'
    }).format(price);
  };

  const formatDate = (dateString) => {
    return new Date(dateString).toLocaleDateString('it-IT');
  };

  return (
    <Link to={`/game/${game.id}`} className="game-card-link">
      <div className="game-card">
        <div className="game-card-image">
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
        
        <div className="game-card-content">
          <h3 className="game-title">{game.title}</h3>
          
          <p className="game-description">
            {game.description && game.description.length > 100 
              ? `${game.description.substring(0, 100)}...` 
              : game.description}
          </p>
          
          <div className="game-info">
            <div className="game-price">
              {formatPrice(game.price)}
            </div>
            
            <div className="game-date">
              {formatDate(game.release_date)}
            </div>
          </div>
          
          {game.software_house && (
            <div className="game-publisher">
              {game.software_house.name}
            </div>
          )}
          
          {game.genres && game.genres.length > 0 && (
            <div className="game-genres">
              {game.genres.map(genre => (
                <span key={genre.id} className="genre-tag">
                  {genre.name}
                </span>
              ))}
            </div>
          )}
        </div>
      </div>
    </Link>
  );
};

export default GameCard;
