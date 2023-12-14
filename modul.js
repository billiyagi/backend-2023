const persiapan = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('Mempersiapkan Bahan...');
        }, 3000)
    });
}

const rebusAir = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('Merebus Air...');
        }, 7000)
    });
}

const masak = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('Memasak Bahan mie...')
        }, 5000)
    });
}

const showDownload = (result) => {
    console.log('Download selesai');
    console.log(`Hasil download: ${result}`)
}

const download = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve(showDownload('windows-10.exe'));
        }, 3000)
    });
}

module.exports = { persiapan, rebusAir, masak, download };