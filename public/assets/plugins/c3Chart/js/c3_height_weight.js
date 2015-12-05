function height_weight_history(){
	var chart = c3.generate({
		data:{
			columns:[
				['weight',55,54,56.6,55.3,56,60.8,58.9,57.7,55.7,57.7,62.5,60.1],
				['height',164,164,164,165,165,165,165,166,166,166,166,166]
			],
			axes:{
				weight:'y',
				height:'y2'
			}
			
		},
		axis:{
			y2:{
				show:true
			}
		}
	})
}