const { createApp } = Vue;
createApp({
  data() {
    return {
      tasks: null,
      new_task: "",
      api_url: "get_tasks.php",
      api_toggle: "toggle.php",
      api_delete: "delete_task.php",
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
    toggle(index) {
      const data = {
        index,
      };
      axios
        .post(this.api_toggle, data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((response) => {
          this.tasks = response.data;
        })
        .catch((error) => {
          console.error(error.message);
        });
    },
    delete_task(task_index) {
      console.log("Rimuovi task");

      const data = {
        index: task_index,
      };
      axios
        .post(this.api_delete, data, {
          headers: { "content-Type": "multipart/form-data" },
        })
        .then((response) => {
          console.log(response);
          this.tasks = response.data;
        })
        .catch((error) => {
          console.error(error.message);
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
