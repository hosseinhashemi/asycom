var getSiblings = function (elem) {
  var siblings = [];
  var sibling = elem.parentNode.firstChild;
  while (sibling) {
    if (sibling.nodeType === 1 && sibling !== elem) {
      siblings.push(sibling);
    }
    sibling = sibling.nextSibling
  }
  return siblings;
};

//Header Menu
const headerMQ = window.matchMedia('(max-width: 992px)')
const headerMenu = document.querySelector('ul.main-menu')
const headerToggle = document.querySelector('.main-menu-toggle')
if (headerMenu) {
  changeMenuStyle(headerMQ)
  headerMQ.addListener(changeMenuStyle)
  headerToggle.addEventListener('click', e => {
    e.currentTarget.classList.toggle('show')
    headerMenu.classList.toggle('show')
  })
  function changeMenuStyle(bp) {
    if (bp.matches) {
      headerMenu.querySelectorAll("li > a").forEach(item => {
        if (getSiblings(item).length != 0) {
          item.parentNode.classList.add('has-child')
          item.addEventListener('click', e => {
            e.preventDefault()
            e.currentTarget.parentNode.classList.toggle('show')
          })
        }
      })
    }
  }
  document.addEventListener("click", (evt) => {
    const flyoutEl = headerMenu;
    let targetEl = evt.target;
    do {
      if (targetEl == flyoutEl || targetEl == headerToggle) {
        return;
      }
      targetEl = targetEl.parentNode;
    } while (targetEl);
    headerMenu.classList.remove('show')
  });
}


if (document.querySelector('.intro .video-box .cover')) {
  document.querySelector('.intro .video-box .cover').addEventListener('click', e => {
    e.preventDefault()
    document.querySelector('.intro .video-box').classList.add('show')
    document.querySelector('.intro .video-box video').play()
  })
}


if (document.querySelector('.review .splide')) {
  new Splide('.review .splide', {
    type: 'loop',
    perPage: 3,
    perMove: 1,
    pagination: false,
    focus: 'center',
    updateOnMove: true,
    direction: document.dir,
    speed: 600,
    autoplay: true,
    interval: 5000,
    breakpoints: {
      768: {
        perPage: 2,
      },
      576: {
        perPage: 1,
      },
    }
  }).mount();
}
if (document.querySelector('.blog-posts .splide')) {
  new Splide('.blog-posts .splide', {
    grid: {
      dimensions:[ [ 1, 1 ], [ 2, 1 ] ],
      gap : {
        row: '60px',
      },
    },
    type: 'loop',
    gap: '30px',
    direction: document.dir,
    perPage: 2,
    perMove: 2,
    pagination: false,
    updateOnMove: true,
    speed: 600,
    autoplay: true,
    interval: 5000,
    breakpoints: {
      992: {
        grid: false,
        perPage: 2,
        focus: 'left',
      },
      576: {
        perPage: 1,
        focus: 'center',
      },
    }
  }).mount(window.splide.Extensions);
}
if (document.querySelector('.work-us .splide')) {
  new Splide('.work-us .splide', {
    type: 'loop',
    perPage: 5,
    perMove: 1,
    pagination: false,
    focus: 'center',
    updateOnMove: true,
    speed: 600,
    autoplay: true,
    direction: document.dir,
    interval: 5000,
    breakpoints: {
      992: {
        perPage: 4,
      },
      768: {
        perPage: 3,
      },
      576: {
        perPage: 2,
      },
      400: {
        perPage: 1,
      },
    }
  }).mount();
}
if (document.querySelector('.latest-instagram .splide')) {
  new Splide('.latest-instagram .splide', {
    type: 'loop',
    perPage: 4,
    perMove: 1,
    pagination: false,
    gap:'16px',
    direction: document.dir,
    updateOnMove: true,
    breakpoints: {
      992:{
        perPage: 1,
        arrows: false,
        gap: 0,
      }
    }
  }).mount();
}
const mainPageFaq = document.querySelector('section.faq-wrapper .faq')
if (mainPageFaq) {
  let allFaqItems = mainPageFaq.querySelectorAll('.item')
  allFaqItems.forEach(item => {
    item.querySelector('.header').addEventListener('click', () => {
      getSiblings(item).forEach(a => a.classList.remove('active'))
      item.classList.toggle('active')
    })
    item.querySelector('.toggle').addEventListener('click', () => {
      getSiblings(item).forEach(a => a.classList.remove('active'))
      item.classList.toggle('active')
    })
  })
}

if(document.querySelector('section.tuition')){
  const allTuitionCards = document.querySelectorAll('section.tuition .card')
  allTuitionCards.forEach(card => {
    let allTabs = card.querySelectorAll('.tab')
    let allContents = card.querySelectorAll('.content')
    allTabs.forEach(tab => {
      tab.addEventListener('click' , e => {
        getSiblings(tab).forEach(c => c.classList.remove('active'))
        allContents.forEach(c => c.classList.remove('active'))
        tab.classList.add('active')
        card.querySelector(`[data-content="${tab.dataset.tab}"]`).classList.add('active')
      })
    })
  })
}