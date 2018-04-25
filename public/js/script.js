// Load google charts - start
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Work', 8],
  ['Eat', 2],
  ['TV', 4],
  ['Gym', 2],
  ['Sleep', 8]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Average Day', 'width':519, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('chart'));
  chart.draw(data, options);
}
// Load google charts - end

var getParagraphEditableTitle = function() {
    var paragraph = document.getElementsByClassName("popin-txt")[0].children;
    var txt = "";
    for(var i=0;i<paragraph.length;i++) {
      txt+=paragraph[i].textContent;
      txt+="\n \n";
    }
    //document.getElementsByName('popin-txt-textarea')[0].appendChild(txt);
    var x = document.getElementsByClassName("popin-title-textarea");
    console.log(x);
}
