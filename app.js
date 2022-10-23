const btn_open = document.querySelector('.btn-open')
            const btn_close = document.querySelector('.btn-close')
            const bd = document.querySelector('body')

            function openMenu() {
                bd.classList.add('active')

            }

            function closeMenu() {
                bd.classList.remove('active')

            }


            btn_close.addEventListener('click', closeMenu)
            btn_open.addEventListener('click', openMenu)