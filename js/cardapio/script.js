
fetch(`${URL}js/cardapio/data.json`) // lê o json
  .then(response => response.json()) // transforma num objeto
  .then(data => {
    let html = '';
    console.log(data.products)
    data.products.forEach(item => {
      html += `
      <li class="list-item">
            <img 
            src="${URL}images/cardapio/${item.path}"
            style="width: 100%;"
          />
          <div>
            <h3 class="item-title">${item.title}</h3>
            <p class="item-price">R$${item.price}</p>
            <p class="item-alt">${item.description}</p>
          </div>
      </li>
      `;
    });
    
    document.getElementById('list-container').innerHTML = html;
  })
  .catch(error => console.error('Erro ao carregar JSON:', error));