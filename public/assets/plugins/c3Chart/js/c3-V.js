
function showDetail(target){
    target.unshift('today\'s steps detail')
    var chart = c3.generate({
      bindto: '#zoom',
      data: {
        columns: [target]
      },

      axis:{
        x:{
            type:'category',
            categories:['0','','','1','','','2','','','3','','','4','','','5','','','6','','','7','','','8','','','9','','','10','','','11','','','12','','','13','','','14','','','15','','','16','','','17','','','18','','','19','','','20','','','21','','','22','','','23','',''],
            tick: {
              multiline:false,
              culling: {
                  max: 96 // the number of tick texts will be adjusted to less than this value
              }
            }
        }
      },
      zoom: {
        enabled: true
      }
    });
}

function height_weight_history(){
  var chart = c3.generate({
    bindto: '#height_weight',
    data:{
      x:'x',
      columns:[
        // ['x','2015-01-01','2015-02-01','2015-03-01','2015-04-01','2015-05-01','2015-06-01','2015-07-01','2015-08-01','2015-09-01','2015-10-01','2015-11-01','2015-12-01'],
        ['x','JAN','FEB','MAR','APR','MAY','JUN','JUL','AUG','SEP','OCT','NOV','DEC'],
        ['weight',55,54,56.6,55.3,56,60.8,58.9,57.7,55.7,57.7,62.5,60.1],
        ['height',164,164,164,165,165,165,165,166,166,166,166,166]
      ],
      axes:{
        weight:'y',
        height:'y2'
      }
      
    },
    axis:{
      x:{
        type:'category',
        tick:{
          // format:'%m'
          multiline:false
        }
      },
      y:{
        label:'weight'
      },
      y2:{
        show:true,
        label:'height'
      }
    }
  })
}

