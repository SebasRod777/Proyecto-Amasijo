document.addEventListener('DOMContentLoaded', () => {
    //card options
    const cardArray = [
      {
        name: '2',
        img: 'images/2.png'
      },
      {
        name: 'arepa',
        img: 'images/arepa.png'
      },
      {
        name: '4',
        img: 'images/4.png'
      },
      {
        name: '5',
        img: 'images/5.png'
      },
      {
        name: '6',
        img: 'images/6.png'
      },
      {
        name: '7',
        img: 'images/7.png'
      },
      {
        name: '2',
        img: 'images/2.png'
      },
      {
        name: 'arepa',
        img: 'images/arepa.png'
      },
      {
        name: '4',
        img: 'images/4.png'
      },
      {
        name: '5',
        img: 'images/5.png'
      },
      {
        name: '6',
        img: 'images/6.png'
      },
      {
        name: '7',
        img: 'images/7.png'
      }
    ]
  
    cardArray.sort(() => 0.5 - Math.random())
  
    const grid = document.querySelector('.grid')
    const resultDisplay = document.querySelector('#result')
    let cardsChosen = []
    let cardsChosenId = []
    let cardsWon = []
  
    //create your board
    function createBoard() {
      for (let i = 0; i < cardArray.length; i++) {
        const card = document.createElement('img')
        card.setAttribute('src', 'images/1.png')
        card.setAttribute('data-id', i)
        card.addEventListener('click', flipCard)
        grid.appendChild(card)
      }
    }
  
    //check for matches
    function checkForMatch() {
      const cards = document.querySelectorAll('img')
      const optionOneId = cardsChosenId[0]
      const optionTwoId = cardsChosenId[1]
      
      if(optionOneId == optionTwoId) {
        cards[optionOneId].setAttribute('src', 'images/1.png')
        cards[optionTwoId].setAttribute('src', 'images/1.png')
        alert('No puedes dar click aqui de nuevo!')
      }
      else if (cardsChosen[0] === cardsChosen[1]) {
        alert('Bien hecho')
        cards[optionOneId].setAttribute('src', 'images/white.png')
        cards[optionTwoId].setAttribute('src', 'images/white.png')
        cards[optionOneId].removeEventListener('click', flipCard)
        cards[optionTwoId].removeEventListener('click', flipCard)
        cardsWon.push(cardsChosen)
      } else {
        cards[optionOneId].setAttribute('src', 'images/1.png')
        cards[optionTwoId].setAttribute('src', 'images/1.png')
        alert('Lo Siento')
      }
      cardsChosen = []
      cardsChosenId = []
      resultDisplay.textContent = cardsWon.length
      if  (cardsWon.length === cardArray.length/2) {
        resultDisplay.textContent = 'Felicidades! Encontraste Todo!'
      }
    }
  
    //flip your card
    function flipCard() {
      let cardId = this.getAttribute('data-id')
      cardsChosen.push(cardArray[cardId].name)
      cardsChosenId.push(cardId)
      this.setAttribute('src', cardArray[cardId].img)
      if (cardsChosen.length ===2) {
        setTimeout(checkForMatch, 500)
      }
    }
  
    createBoard()
  })
  