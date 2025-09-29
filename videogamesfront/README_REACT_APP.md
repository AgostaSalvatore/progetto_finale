# GameStore - React Frontend

Una moderna applicazione React per visualizzare e gestire un catalogo di videogiochi.

## Funzionalità

- **Lista Videogiochi**: Visualizza tutti i videogiochi disponibili in una griglia responsive
- **Ricerca**: Cerca videogiochi per titolo o descrizione
- **Dettagli Gioco**: Visualizza informazioni dettagliate di ogni videogioco
- **Design Moderno**: UI moderna con gradients e animazioni smooth
- **Responsive**: Ottimizzato per desktop e mobile

## Struttura Componenti

### `src/services/api.js`
Servizio per le chiamate API al backend Laravel:
- `getAllGames()`: Recupera tutti i videogiochi
- `getGameById(id)`: Recupera un singolo videogioco

### `src/components/GameCard.jsx`
Componente per visualizzare una singola card di videogioco:
- Immagine di copertina con fallback
- Titolo, descrizione, prezzo
- Generi e casa software
- Hover effects e animazioni

### `src/components/GamesList.jsx`
Componente principale per la lista dei videogiochi:
- Griglia responsive di GameCard
- Barra di ricerca
- Loading states e error handling
- Statistiche dei risultati

### `src/components/GameDetail.jsx`
Pagina di dettaglio del videogioco:
- Informazioni complete del gioco
- Immagine grande di copertina
- Metadati (prezzo, data rilascio, sviluppatore)
- Pulsanti di azione (acquisto, wishlist)

## API Endpoints Utilizzati

L'applicazione si connette al backend Laravel tramite:
- `GET /api/videogames` - Lista tutti i videogiochi
- `GET /api/videogames/{id}` - Dettagli di un videogioco specifico

## Configurazione

L'URL dell'API è configurato nel file `.env`:
```
VITE_API_URL=http://127.0.0.1:8000/api/videogames
```

## Come Avviare

1. Assicurati che il backend Laravel sia in esecuzione su `http://127.0.0.1:8000`
2. Installa le dipendenze: `npm install`
3. Avvia l'applicazione: `npm run dev`
4. Apri il browser su `http://localhost:5173`

## Tecnologie Utilizzate

- **React 19** - Framework frontend
- **Vite** - Build tool e dev server
- **CSS3** - Styling con gradients e animazioni
- **Fetch API** - Chiamate HTTP al backend

## Struttura Dati

L'applicazione gestisce videogiochi con la seguente struttura:
```javascript
{
  id: number,
  title: string,
  description: string,
  price: number,
  release_date: string,
  cover_image: string,
  software_house: {
    id: number,
    name: string
  },
  genres: [
    {
      id: number,
      name: string
    }
  ]
}
```

## Features Implementate

- ✅ Visualizzazione lista videogiochi
- ✅ Ricerca e filtri
- ✅ Pagina dettaglio
- ✅ Design responsive
- ✅ Loading states
- ✅ Error handling
- ✅ Placeholder per immagini mancanti
- ✅ Animazioni e hover effects

## Note Tecniche

- L'applicazione usa una navigazione semplice basata su state invece di React Router per semplicità
- Le immagini sono servite dal backend Laravel tramite storage
- Il design è ottimizzato per una buona UX su tutti i dispositivi
- Gestione degli errori per connessioni API fallite
