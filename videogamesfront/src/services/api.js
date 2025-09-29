const API_BASE_URL = import.meta.env.VITE_API_URL || 'http://127.0.0.1:8000/api/videogames';

export const gameService = {
  // Fetch all games
  async getAllGames() {
    try {
      const response = await fetch(API_BASE_URL);
      if (!response.ok) {
        throw new Error(`HTTP error! status: ${response.status}`);
      }
      const data = await response.json();
      return data.success ? data.data : [];
    } catch (error) {
      console.error('Error fetching games:', error);
      throw error;
    }
  },

  // Fetch single game by ID
  async getGameById(id) {
    try {
      const response = await fetch(`${API_BASE_URL}/${id}`);
      if (!response.ok) {
        throw new Error(`HTTP error! status: ${response.status}`);
      }
      const data = await response.json();
      return data.success ? data.data : null;
    } catch (error) {
      console.error('Error fetching game:', error);
      throw error;
    }
  }
};
