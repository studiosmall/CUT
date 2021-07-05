//import Plyr from 'plyr';
import SweetScroll from 'sweet-scroll';

export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired


    //
    // Video
    //const player = new Plyr('#player');  // eslint-disable-line no-unused-vars

    // document.addEventListener('DOMContentLoaded', () => {
    //    SweetScroll = new SweetScroll({ 
    //      /* some options */ 
    //      vertical: false,
    //     horizontal: true,  
        
    //    }, '#main');
    // }, false);

    SweetScroll.create({
      horizontal: true,
      vertical: false,
      updateURL: false,
      easing: 'easeInOutExpo',
    }, '#main');

    const scrollContainer = document.querySelector('main');

    scrollContainer.addEventListener('wheel', (evt) => {
        evt.preventDefault();
        scrollContainer.scrollLeft += evt.deltaY;
    });


    // var SweetScroll = new SweetScroll({
    //   vertical: false,
    //   horizontal: true,
    // }, '#main');
  

  },
};
