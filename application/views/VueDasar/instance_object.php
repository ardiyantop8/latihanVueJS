<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Instance Object Vue.js</title>
</head>

<body>
    <div id="app-latihan-intance-object">
        <p>Nama Saya : {{nama}}</p>
        <p>Umur Saya : {{umur}}</p>
    </div>

    <script src="<?= base_url('assets/js/'); ?>vue.js"></script>
    <script>
        var pribadi = {
            nama: "Ardiyanto Putra",
            umur: "27 Tahun",
            kelamin: "Laki-laki"
        }
        const vm = new Vue({
            el: '#app-latihan-intance-object',
            data: pribadi
        });
    </script>
</body>

</html>