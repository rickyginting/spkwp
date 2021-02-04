$(function() {
    // pie chart
    $("span.pie").peity("pie", {
        fill: ['#36a2eb', '#ff6384', '#ffffff'],
        width:50
    })

    // line chart
    $(".line").peity("line",{
        fill: '#6059ee',
        stroke:'#ff6384',
        width:50
    })

    // bar chart
    $(".bar").peity("bar", {
        fill: ["#6059ee", "#d7d7d7"],
        width:50
    })

    // bar dashboard chart
    $(".bar-dashboard").peity("bar", {
        fill: ["#6059ee", "#d7d7d7"],
        width:100
    })

    // updating chart
    var updatingChart = $(".updating-chart").peity("line", { fill: '#6059ee',stroke:'#ff6384', width: 64 })

    setInterval(function() {
        var random = Math.round(Math.random() * 10)
        var values = updatingChart.text().split(",")
        values.shift()
        values.push(random)

        updatingChart
            .text(values.join(","))
            .change()
    }, 1000);

});