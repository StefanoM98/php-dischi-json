const { createApp } = Vue;

createApp({
  data() {
    return {
      disks: [],
    };
  },
  mounted() {
    axios
      .get("http://localhost:8888/Boolean/php-dischi-json/server.php")
      .then((resp) => {
        this.disks = resp.data.results;
      });
  },
}).mount("#app");
