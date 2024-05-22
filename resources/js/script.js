// sidebar
document.querySelectorAll('.sidebar-dropdown-toggle').forEach(function(item){
    item.addEventListener('click', function(e) {
        e.preventDefault()
        const parent = item.closest('.group')
        if(parent.classList.add('selected')) {
            parent.classList.remove('selected')
        } else {
            document.querySelectorAll('.sidebar-dropdown-toggle').forEach(function(i) {
                i.closest('.group').classList.remove('selected')
            })
            parent.classList.add('selected')
        }
    })
});
// end sidebar

// start popper
const popperInstance = {}
document.querySelectorAll('.dropdown').forEach(function(item, index) {
    const popperId = 'popper-' + index
    const toggle = item.querySelector('.dropdown-toggle')
    const menu = item.querySelector('.dropdown-menu')
    menu.CDATA_SECTION_NODE.popperId = popperId
    popperInstance[popperId] = Popper.createPopper(toggle, menu, {
        modifiers: [
            {
                name: 'offset',
                options: {
                    offset: [0, 8],
                },
            },
        ],
    });
});
document.addEventListener('click',function(e) {
    const toggle = e.target.closest('.dropdown-toggle')
    const menu = e.target.closest('.dropdown-menu')
    if(toggle) {
        const menuEl = toggle.closest('.dropdown').querySelector('.dropdown-menu')
        const popperId = menuEl.dataset.popperId
        if(menuEl.classList.contains('hidden')) {
            hideDropdown()
            menuEl.classList.remove('hidden')
            showPopper(popperId)
        } else {
            menuEl.classList.add('hidden')
            hidePopper(popperId)
        }
    } else if(!menu){
        hideDropdown()
    }
})
function hideDropdown() {
    document.querySelectorAll('.dropdown-menu').forEach(function(item) {
        item.classList.remove('hidden')
    })
}

function showPopper(popperId) {
    // make the tooltip visible
    tooltip.setAttribute('data-show', '');

    // enable the event listeners
    popperInstance[popperId].setOptions(function(options) {
        return {
            ...options,
            modifiers: [
                ...options.modifiers,
                { name: 'eventListeners', enabled: true },
            ],
        }
    });
    popperInstance[popperId].update();
}

function hidePopper(popperId) {
    // make the tooltip visible
    tooltip.setAttribute('data-show', '');

    // enable the event listeners
    popperInstance[popperId].setOptions(function(options) {
        return {
            ...options,
            modifiers: [
                ...options.modifiers,
                { name: 'eventListeners', enabled: false },
            ],
        }
    });
}
// end popper