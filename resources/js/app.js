require('./bootstrap')

document.addEventListener('DOMContentLoaded', function(event) {
    let dropdowns = document.querySelectorAll('.dropdown')

    let closeDropdowns = () => {
        dropdowns.forEach(el => {
            el.classList.remove('open')
        })
    }

    dropdowns.forEach(el => {
        el.querySelector('.btn-details').addEventListener('click', () => {
            el.classList.toggle('open')
        })

        el.querySelector('.overlay').addEventListener('click', closeDropdowns)
    })

    document.addEventListener('keyup', event => {
        if (event.code === 'Escape') {
            closeDropdowns()
        }
    })
})
