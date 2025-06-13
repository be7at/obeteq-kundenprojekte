function openModal(type) {
    const modal = document.getElementById('modal');
    const body = document.getElementById('modal-body');
    body.innerHTML = '';
    if (type === 'villa') {
        body.innerHTML = '<h3>Luxus Villa am See</h3><p>Einzigartige Villa mit Seeblick und großzügigem Grundstück.</p>';
    } else if (type === 'apartment') {
        body.innerHTML = '<h3>Modernes Stadtapartment</h3><p>Perfekte Lage im Herzen der Stadt mit hochwertiger Ausstattung.</p>';
    } else if (type === 'house') {
        body.innerHTML = '<h3>Familienfreundliches Haus</h3><p>Großer Garten und ruhige Nachbarschaft ideal für Familien.</p>';
    }
    modal.style.display = 'flex';
    gsap.from('.modal-content', {scale: 0.8, opacity: 0, duration: 0.4});
}

function closeModal() {
    const modal = document.getElementById('modal');
    modal.style.display = 'none';
}

document.addEventListener('DOMContentLoaded', () => {
    if (window.matchMedia('(prefers-reduced-motion: no-preference)').matches) {
        gsap.to('.property', {opacity: 1, stagger: 0.2, duration: 0.8});
    } else {
        document.querySelectorAll('.property').forEach(el => el.style.opacity = 1);
    }

    const burger = document.getElementById('burger');
    const nav = document.getElementById('nav');
    burger.addEventListener('click', () => {
        nav.classList.toggle('open');
        burger.classList.toggle('open');
    });
    nav.querySelectorAll('a').forEach(link =>
        link.addEventListener('click', () => {
            nav.classList.remove('open');
            burger.classList.remove('open');
        })
    );
});