const app = new Vue(
    {
      el: '#app',
      data: {

      },
      created() {
        axios.get('')
          .then((result) => {
           
        })
          .catch((error) => {
          console.log(error);
        })
      },
    }
  );