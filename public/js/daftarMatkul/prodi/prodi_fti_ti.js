function updateData() {
    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: 'https://layar.yarsi.ac.id/webservice/rest/server.php?wstoken='+tokenApi+'&wsfunction=core_course_get_categories&moodlewsrestformat=json',
        cache: true,

        success: function (data, status, xhr) {
            let courseCount = 0;
            const excludedIds = [237, 251];
            const searchTerm = 'Teknik Informatika';
            for (let i = 0; i < data.length; i++) {
                const item = data[i];
                if (item.parent === 6 && !excludedIds.includes(item.id) && item.name.includes(searchTerm)) {
                    courseCount += data[i]['coursecount'];
                }
            }
            $('#jumlah-matkul').text(courseCount);

            updateTime();

        },
        error: function (xhr, status, error) {
            // penanganan kesalahan saat permintaan AJAX gagal
            console.log('Error:', error);
        }
    });
}

function updateTime() {
    // waktu saat ini
    const currentTime = new Date();

    // Menambahkan 1 jam
    const updateDateTime = new Date(currentTime.getTime() + (1000 * 60 * 60));

    // Selisih waktu dalam milidetik
    let elapsedTime = updateDateTime - currentTime;

    // menghitung jam dan menit yang berlalu
    const hours = Math.floor(elapsedTime / (1000 * 60 * 60));
    const minutes = Math.floor((currentTime % (1000 * 60 * 60)) / (1000 * 60));

    let elapsedTimeString = '';

    if (hours === 1 && minutes === 0) {
        elapsedTimeString = hours + ' jam yang lalu';
    } else {
        elapsedTimeString = minutes + ' menit yang lalu';
    }

    // memperbarui teks dengan keterangan pembaruan data
    $('#last-updated').text("Pembaruan data terjadi " + elapsedTimeString);
}

$(document).ready(function () {
    updateData();

    // Jadwalkan pembaruan data sesuai dengan waktu pembaruan berikutnya setiap 1 jam
    const intervalID = setInterval(updateData, 60 * 60 * 1000);
});