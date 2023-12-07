const { index, store, update, destroy, show } = require("./controller/FruitController.js");

const main = () => {
    index();
    destroy(1);
    update(0, "Nanas");
    store("Mangga");
    show(2);
}

main();