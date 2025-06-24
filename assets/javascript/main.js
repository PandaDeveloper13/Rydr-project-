const accountImage = document.querySelector('.account img');
if (accountImage) {
    accountImage.addEventListener('click', function () {
        const account = this.closest('.account');
        account.classList.toggle('active');
    });

    document.addEventListener('click', function (e) {
        const account = document.querySelector('.account');
        if (account && !account.contains(e.target)) {
            account.classList.remove('active');
        }
    });
}



const modalClose = document.querySelector('.modal-close');
if (modalClose) {
    modalClose.addEventListener('click', function () {
        const modal = document.getElementById('loginModal');
        if (modal) modal.classList.add('hidden');
    });
}

const modal = document.getElementById('loginModal');
if (modal) {
    modal.addEventListener('click', function (e) {
        if (e.target === this) {
            this.classList.add('hidden');
        }
    });
}

function startChat() {
    // In a real application, you would integrate a chat service here.
    alert('Chat wordt binnenkort beschikbaar!');
}
