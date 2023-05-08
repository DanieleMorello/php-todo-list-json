const { createApp } = Vue;
createApp({
  data() {
    return {
      tasks: null,
      api_url: "get_tasks.php",
      new_task: "",
    };
  },
  methods: {
    add_task() {
      console.log("Aggiungi task");
      const data = {
        new_task: this.new_task,
      };
      axios
        .post("store_task.php", data, {
          headers: { "content-Type": "multipart/form-data" },
        })
        .then((response) => {
          console.log(response);
          this.tasks = response.data;
        })
        .catch((error) => {
          console.error();
        });
    },
  },
  mounted() {
    axios
      .get(this.api_url)
      .then((response) => {
        console.log(response);
        this.tasks = response.data;
      })
      .catch((error) => {
        console.error(error.message);
      });
  },
}).mount("#app");
