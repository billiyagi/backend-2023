const { persiapan, rebusAir, masak, download } = require('./modul')

const main = async () => {
    console.log(await persiapan());
    console.log(await rebusAir());
    console.log(await masak());
    console.log(await download());
}

main();