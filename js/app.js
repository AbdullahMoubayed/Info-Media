const app = Vue.createApp( {
    data() {
      return {
        isOpen: false,
        språk: [
            { url: 'assets/img/språk/html.png', title: 'HTML' },
            { url: 'assets/img/språk/css.png', title: 'CSS' },
            { url: 'assets/img/språk/javascript.png', title: 'Javascript' },
            { url: 'assets/img/språk/sass.png', title: 'SCSS' },
            { url: 'assets/img/språk/php.png', title: 'PHP' },
            { url: 'assets/img/språk/c.png', title: 'C#' },
            { url: 'assets/img/språk/3d.png', title: '3D' },
            { url: 'assets/img/språk/xd.png', title: 'XD' },
            { url: 'assets/img/språk/unity.png', title: 'Unity' },
            { url: 'assets/img/språk/vr.png', title: 'VR' },
            
        ]
      }
    },
    methods: {
      toggleMenu() {
        this.isOpen = !this.isOpen;
      }
    }
  })
  
  app.mount('#app')
  