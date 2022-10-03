  const labels = [
    'Januar',
    'Februar',
    'März',
    'April',
    'Mai',
    'Juni',
    'Juli',
    'August',
  ];
  
  const data = {
    labels: labels,
    datasets: [{
      label: 'Aktienfonds',
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: [5, 10, 5, 50, 20, 35, 45, 75],
    }]
  };
  
  const config = {
    type: 'line', 
    data: data,
    options: {}
  };
  
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );