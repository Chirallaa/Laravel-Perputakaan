<script>
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
            @foreach ($tanggal_pengembalian as $item)
                {{$item}},
            @endforeach
        ],
        datasets: [{
            label: 'Selesai Dipinjam',
            data: [
                @foreach ($count as $item)
                    {{$item}},
                @endforeach
            ],
            backgroundColor: '#09E1FF',
            borderWidth: 1
        }]
    },
    options: {
        events: ['mouseout', 'touchstart', 'touchmove'],
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

</script>
