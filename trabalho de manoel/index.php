<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>DG inports</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">DG inports</h1>

        <!-- Carrinho info e botões -->
        <div class="mb-6 flex justify-between items-center space-x-4">
            <div>
                <span class="font-semibold">Itens no carrinho:</span> <span id="cart-count">0</span>
            </div>
            <div class="flex space-x-2">
                <button id="view-cart-btn" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700" disabled>
                     Carrinho
                </button>
                <button id="checkout-btn" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700" disabled>
                    Finalizar Compra
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Produto 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden" data-name="Caixa de Som Bluetooth Boombox 3 JBL" data-price="2179">
                <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQlT2jXMLxeNudUoyoVk-sVcFVOBxYtKxpi4B83Zte8nrYA8TsFEm-GlIRAYQTWIFQcXOGmqU4QV-Fxm0vw5GKC7a11DDT4Dk5YGk8v0opb5p_RPeGtTdK9GMU" alt="Produto 1" class="w-full h-48 object-cover" />
                <div class="p-4">
                    <h2 class="text-xl font-bold mb-2">Caixa de Som Bluetooth Boombox 3 JBL</h2>
                    <p class="text-gray-700 mb-4">R$ 2.179–R$ 2.643</p>
                    <button class="add-to-cart bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Adicionar no Carrinho</button>
                </div>
            </div>

            <!-- Produto 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden" data-name="JBL Flip 6" data-price="839.90">
                <img src="https://www.jbl.com.br/dw/image/v2/BFND_PRD/on/demandware.static/-/Sites-masterCatalog_Harman/default/dw593abf39/2_JBL_FLIP6_3_4_RIGHT_BLACK_30195_x1.png?sw=535&sh=535" alt="Produto 2" class="w-full h-48 object-cover" />
                <div class="p-4">
                    <h2 class="text-xl font-bold mb-2">JBL Flip 6</h2>
                    <p class="text-gray-700 mb-4">R$ 839,90</p>
                    <button class="add-to-cart bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Adicionar no Carrinho</button>
                </div>
            </div>

            <!-- Produto 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden" data-name="Apple iPhone 16e" data-price="3999">
                <img src="https://images2.kabum.com.br/produtos/fotos/717162/iphone-16e-apple-128gb-camera-48mp-tela-super-retina-xdr-6-1-preto_1740491505_m.jpg" alt="Produto 3" class="w-full h-48 object-cover" />
                <div class="p-4">
                    <h2 class="text-xl font-bold mb-2">Apple iPhone 16e</h2>
                    <p class="text-gray-700 mb-4">R$ 5,599R$ 7,299</p>
                    <button class="add-to-cart bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Adicionar no Carrinho</button>
                </div>
            </div>
              <!-- Produto 4 -->
              <div class="bg-white rounded-lg shadow-md overflow-hidden" data-name="Apple iPhone 16e" data-price="3999">
                <img src="https://encurtador.com.br/JUruq" alt="Produto 4" class="w-full h-48 object-cover" />
                <div class="p-4">
                    <h2 class="text-xl font-bold mb-2">Galaxy Watch7 (Bluetooth, 44mm)</h2>
                    <p class="text-gray-700 mb-4"> R$2.564,05</p>
                    <button class="add-to-cart bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Adicionar no Carrinho</button>
                </div>
            </div>
              <!-- Produto 5 -->
              <div class="bg-white rounded-lg shadow-md overflow-hidden" data-name="Apple iPhone 16e" data-price="3999">
                <img src="https://images.samsung.com/is/image/samsung/p6pim/br/2407/gallery/br-galaxy-buds3-pro-r630-sm-r630nzaazto-542147381?$684_547_PNG$" alt="Produto 3" class="w-full h-48 object-cover" />
                <div class="p-4">
                    <h2 class="text-xl font-bold mb-2">Galaxy Buds3 Pro</h2>
                    <p class="text-gray-700 mb-4">R$ 2.089,05 </p>
                    <button class="add-to-cart bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Adicionar no Carrinho</button>
                </div>
            </div>


            <!-- Produto 6 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden" data-name="Smartphone Samsung Galaxy S23 Ultra 5G" data-price="4500">
                <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcSAjaLuhpl_NIpt5FGMOTDmFwcbau7kCx1gDaIiagrGXajh6em5wAbU03-vvL00x65HPdA_2Fhh4xcCv7mkpKNahNaQFb1EAlG3XlYbzp-0LhLUF9xU12Uh" alt="Produto 4" class="w-full h-48 object-cover" />
                <div class="p-4">
                    <h2 class="text-xl font-bold mb-2">Smartphone Samsung Galaxy S23 Ultra 5G</h2>
                    <p class="text-gray-700 mb-4">R$ 4.500–R$ 6.166</p>
                    <button class="add-to-cart bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Adicionar no Carrinho</button>
                </div>
            </div>
            <!-- Produto 7 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden" data-name="Smartphone Samsung Galaxy S23 Ultra 5G" data-price="4500">
                <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRCUed3g2ndCA9DSsjseZ4Rgo43vFyFPmwzweLhr4L_NG8yLQxcZfbjPj-WOOIS-uaYY6oP207el85u-ajSTOBrDXmT72aW_6NDx6b30lXSJO_OfkqOuifXoQ" alt="Produto 4" class="w-full h-48 object-cover" />
                <div class="p-4">
                    <h2 class="text-xl font-bold mb-2">Notebook 2 em 1 Positivo Duo Intel Celeron</h2>
                    <p class="text-gray-700 mb-4">R$ 1.380–R$ 1.600</p>
                    <button class="add-to-cart bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Adicionar no Carrinho</button>
                </div>
            </div>
            <!-- Produto 8 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden" data-name="Smartphone Samsung Galaxy S23 Ultra 5G" data-price="4500">
                <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSmEFTGM1-WQVT1DcGAHb4J2_XpvqKd4YGAy9-znkWOZkSn6S7Fg4u0WMKgbgsgIzu5LLlgzqr0OiS34Eb1ZwyuHhvgRXyeUaTHpX-wTvfPhYm4bOYar0HH--o" alt="Produto 4" class="w-full h-48 object-cover" />
                <div class="p-4">
                    <h2 class="text-xl font-bold mb-2">Apple Airpods 3</h2>
                    <p class="text-gray-700 mb-4">R$ 754</p>
                    <button class="add-to-cart bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Adicionar no Carrinho</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Carrinho -->
    <div id="cart-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center">
        <div class="bg-white rounded-lg shadow-lg max-w-lg w-full p-6 relative">
            <h2 class="text-2xl font-bold mb-4">Produtos no Carrinho</h2>
            <ul id="cart-items" class="mb-4 max-h-64 overflow-auto"></ul>
            <div class="flex justify-between font-semibold mb-4">
                <span>Total:</span>
                <span id="cart-total">R$ 0,00</span>
            </div>
            <div class="flex justify-end space-x-2">
                <button id="close-cart" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700">Fechar</button>
            </div>
        </div>
    </div>

    <script>
        const cartCount = document.getElementById('cart-count');
        const checkoutBtn = document.getElementById('checkout-btn');
        const viewCartBtn = document.getElementById('view-cart-btn');
        const addToCartButtons = document.querySelectorAll('.add-to-cart');
        const cartModal = document.getElementById('cart-modal');
        const cartItemsList = document.getElementById('cart-items');
        const cartTotalEl = document.getElementById('cart-total');
        const closeCartBtn = document.getElementById('close-cart');

        let cart = [];

        function formatPrice(price) {
            return 'R$ ' + price.toFixed(2).replace('.', ',');
        }

        function updateCartCount() {
            cartCount.textContent = cart.length;
            viewCartBtn.disabled = cart.length === 0;
            checkoutBtn.disabled = cart.length === 0;
            if (cart.length === 0) {
                viewCartBtn.classList.add('bg-yellow-300', 'cursor-not-allowed');
                viewCartBtn.classList.remove('bg-yellow-500', 'hover:bg-yellow-700');
                checkoutBtn.classList.add('bg-green-300', 'cursor-not-allowed');
                checkoutBtn.classList.remove('bg-green-500', 'hover:bg-green-700');
            } else {
                viewCartBtn.classList.remove('bg-yellow-300', 'cursor-not-allowed');
                viewCartBtn.classList.add('bg-yellow-500', 'hover:bg-yellow-700');
                checkoutBtn.classList.remove('bg-green-300', 'cursor-not-allowed');
                checkoutBtn.classList.add('bg-green-500', 'hover:bg-green-700');
            }
        }

        function renderCart() {
            cartItemsList.innerHTML = '';
            let total = 0;
            cart.forEach((item, index) => {
                total += item.price;
                const li = document.createElement('li');
                li.className = "flex justify-between items-center border-b py-2";
                li.innerHTML = `
                    <span>${item.name}</span>
                    <div class="flex items-center space-x-2">
                        <span>${formatPrice(item.price)}</span>
                        <button data-index="${index}" class="remove-item text-red-500 hover:text-red-700 font-bold">×</button>
                    </div>
                `;
                cartItemsList.appendChild(li);
            });
            cartTotalEl.textContent = formatPrice(total);

           
            document.querySelectorAll('.remove-item').forEach(button => {
                button.addEventListener('click', e => {
                    const index = e.target.dataset.index;
                    cart.splice(index, 1);
                    updateCartCount();
                    renderCart();
                });
            });
        }

        addToCartButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                const productDiv = e.target.closest('[data-name]');
                const name = productDiv.getAttribute('data-name');
                const price = parseFloat(productDiv.getAttribute('data-price'));
                cart.push({ name, price });
                updateCartCount();
                alert('Produto adicionado ao carrinho!');
            });
        });

        viewCartBtn.addEventListener('click', () => {
            renderCart();
            cartModal.classList.remove('hidden');
            cartModal.classList.add('flex');
        });

        closeCartBtn.addEventListener('click', () => {
            cartModal.classList.add('hidden');
            cartModal.classList.remove('flex');
        });

        checkoutBtn.addEventListener('click', () => {
            alert(`Compra finalizada com sucesso!  ${cart.length}`);
            cart = [];
            updateCartCount();
            cartModal.classList.add('hidden');
            cartModal.classList.remove('flex');
        });

        
        updateCartCount();
    </script>
</body>
</html>
