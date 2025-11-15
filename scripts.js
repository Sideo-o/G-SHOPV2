// Shared scripts for G-Shop modal behavior
document.addEventListener('DOMContentLoaded', function(){
  // Tab switching for all modals using data-action buttons
  document.querySelectorAll('[data-action="show-login"]').forEach(btn=>{
    btn.addEventListener('click', ()=>{
      const modal = btn.closest('.modal');
      if(!modal) return;
      modal.querySelectorAll('.modal-tabs .nav-link').forEach(n=>n.classList.remove('active'));
      btn.classList.add('active');
      modal.querySelectorAll('.tab-pane').forEach(p=>p.classList.remove('active'));
      const pane = modal.querySelector('#pane-login');
      if(pane) pane.classList.add('active');
    });
  });
  document.querySelectorAll('[data-action="show-register"]').forEach(btn=>{
    btn.addEventListener('click', ()=>{
      const modal = btn.closest('.modal');
      if(!modal) return;
      modal.querySelectorAll('.modal-tabs .nav-link').forEach(n=>n.classList.remove('active'));
      btn.classList.add('active');
      modal.querySelectorAll('.tab-pane').forEach(p=>p.classList.remove('active'));
      const pane = modal.querySelector('#pane-register');
      if(pane) pane.classList.add('active');
    });
  });

  // Password visibility toggles
  document.querySelectorAll('.btn-eye').forEach(btn=>{
    btn.addEventListener('click', ()=>{
      const target = document.querySelector(btn.getAttribute('data-target'));
      if(!target) return;
      if(target.type === 'password'){
        target.type = 'text';
        btn.querySelector('i').classList.remove('bi-eye');
        btn.querySelector('i').classList.add('bi-eye-slash');
      } else {
        target.type = 'password';
        btn.querySelector('i').classList.remove('bi-eye-slash');
        btn.querySelector('i').classList.add('bi-eye');
      }
    });
  });

  // Prevent actual submission in demo and show simple alert
  ['loginForm','loginForm2','loginForm3','loginForm4','loginForm5'].forEach(id=>{
    const f = document.getElementById(id);
    if(f) f.addEventListener('submit', (e)=>{ e.preventDefault(); alert('Demo login — replace with real auth.'); const modal = f.closest('.modal'); if(modal) bootstrap.Modal.getInstance(modal)?.hide(); });
  });
  ['registerForm','registerForm2','registerForm3','registerForm4','registerForm5'].forEach(id=>{
    const f = document.getElementById(id);
    if(f) f.addEventListener('submit', (e)=>{ e.preventDefault(); alert('Demo registration — replace with real registration.'); const modal = f.closest('.modal'); if(modal) bootstrap.Modal.getInstance(modal)?.hide(); });
  });

  // --- Client-side cart (localStorage) ---
  const CART_KEY = 'gshop_cart_v1';

  function getCart(){
    try{ return JSON.parse(localStorage.getItem(CART_KEY)) || []; }catch(e){ return []; }
  }
  function saveCart(cart){ localStorage.setItem(CART_KEY, JSON.stringify(cart)); updateCartCount(); }
  function updateCartCount(){
    const cart = getCart();
    const count = cart.reduce((s,i)=>s + (i.qty||1),0);
    document.querySelectorAll('#cartCount').forEach(el=> el.textContent = count);
  }
  function formatCurrency(n){ return '$' + Number(n).toLocaleString(undefined,{maximumFractionDigits:2}); }

  function addToCart(item){
    const cart = getCart();
    const existing = cart.find(i=>i.id === item.id);
    if(existing){ existing.qty = (existing.qty||1) + 1; }
    else { item.qty = 1; cart.push(item); }
    saveCart(cart);
  }

  // Attach add-to-cart handlers
  document.querySelectorAll('.add-to-cart').forEach(btn=>{
    btn.addEventListener('click', ()=>{
      const item = {
        id: btn.getAttribute('data-id'),
        name: btn.getAttribute('data-name'),
        price: Number(btn.getAttribute('data-price')) || 0,
        img: btn.getAttribute('data-img') || ''
      };
      addToCart(item);
      // simple feedback
      btn.textContent = 'Added';
      setTimeout(()=> btn.textContent = 'Add to Cart',800);
    });
  });

  // If on cart page, render contents
  function renderCartPage(){
    const cartItemsEl = document.getElementById('cartItems');
    if(!cartItemsEl) return;
    const cart = getCart();
    const emptyNotice = document.getElementById('emptyCartNotice');
    if(cart.length === 0){ if(emptyNotice) emptyNotice.style.display = 'block'; document.getElementById('summarySubtotal').textContent = formatCurrency(0); document.getElementById('summaryTotal').textContent = formatCurrency(0); return; }
    if(emptyNotice) emptyNotice.style.display = 'none';
    // build list
    cartItemsEl.innerHTML = '';
    cart.forEach(item=>{
      const row = document.createElement('div');
      row.className = 'card mb-3 p-3';
      row.innerHTML = `
        <div class="d-flex align-items-center gap-3">
          <img src="${item.img}" style="width:120px;height:80px;object-fit:cover;border-radius:6px" alt="">
          <div class="flex-grow-1">
            <h6 class="mb-1">${item.name}</h6>
            <div class="d-flex justify-content-between align-items-center">
              <div class="text-muted">${formatCurrency(item.price)} each</div>
              <div>
                <button class="btn btn-sm btn-outline-secondary me-1 qty-decrease" data-id="${item.id}">-</button>
                <span class="mx-1 qty" data-id="${item.id}">${item.qty}</span>
                <button class="btn btn-sm btn-outline-secondary ms-1 qty-increase" data-id="${item.id}">+</button>
              </div>
            </div>
          </div>
          <div class="text-end">
            <div class="fw-bold">${formatCurrency(item.price * item.qty)}</div>
            <button class="btn btn-link text-danger btn-sm remove-item" data-id="${item.id}">Remove</button>
          </div>
        </div>`;
      cartItemsEl.appendChild(row);
    });
    // summary
    const subtotal = cart.reduce((s,i)=> s + (i.price * (i.qty||1)), 0);
    document.getElementById('summarySubtotal').textContent = formatCurrency(subtotal);
    document.getElementById('summaryTotal').textContent = formatCurrency(subtotal);

    // attach handlers (delegation simpler)
    document.querySelectorAll('.qty-increase').forEach(b=> b.addEventListener('click', ()=>{ changeQty(b.getAttribute('data-id'), 1); }));
    document.querySelectorAll('.qty-decrease').forEach(b=> b.addEventListener('click', ()=>{ changeQty(b.getAttribute('data-id'), -1); }));
    document.querySelectorAll('.remove-item').forEach(b=> b.addEventListener('click', ()=>{ removeItem(b.getAttribute('data-id')); }));
  }

  function changeQty(id, delta){
    const cart = getCart();
    const it = cart.find(i=>i.id===id); if(!it) return;
    it.qty = (it.qty||1) + delta; if(it.qty < 1) it.qty = 1;
    saveCart(cart); renderCartPage();
  }

  function removeItem(id){
    let cart = getCart(); cart = cart.filter(i=> i.id !== id); saveCart(cart); renderCartPage();
  }

  // clear cart / checkout
  const clearBtn = document.getElementById('clearCartBtn'); if(clearBtn) clearBtn.addEventListener('click', ()=>{ if(confirm('Clear cart?')){ localStorage.removeItem(CART_KEY); renderCartPage(); updateCartCount(); } });
  const checkoutBtn = document.getElementById('checkoutBtn'); if(checkoutBtn) checkoutBtn.addEventListener('click', ()=>{ alert('Demo checkout — implement payment flow separately.'); });

  // initial update
  updateCartCount(); renderCartPage();
});
