document.addEventListener("DOMContentLoaded", function() {
    const produtos = [
        { nome: "Produto 1", preco: "R$ 100,00", imagem:  img="../../assets/imgs/post4-memory-ram.jpg"},
        { nome: "Produto 2", preco: "R$ 150,00", imagem:  img="../../assets/imgs/post2-CPU.jpg" },
        { nome: "Produto 3", preco: "R$ 200,00", imagem:  img="../../assets/imgs/post3-placRede.jpg" }
    ];

    const container = document.getElementById("produtos-container");

    produtos.forEach(produto => {
        const card = document.createElement("div");
        card.classList.add("col-md-4");

        card.innerHTML = `
            <div class="card p-2">
                <img src="${produto.imagem}" class="card-img-top" alt="${produto.nome}">
                <div class="card-body text-center">
                    <h5 class="card-title">${produto.nome}</h5>
                    <p class="card-text">${produto.preco}</p>
                    <button class="btn btn-primary">Comprar</button>
                </div>
            </div>
        `;
        
        container.appendChild(card);
    });
});
