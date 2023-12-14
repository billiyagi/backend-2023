const { persiapan, rebusAir, masak, download } = require('./modul')

const main = () => {
    persiapan().then((result) => {
        console.log(result);
        return rebusAir();
    }).then((result) => {
        console.log(result);
        return masak();
    }).then((result) => {
        console.log(result)
        return download()
    });
}

main();