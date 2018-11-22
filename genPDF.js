function genPDF() {
	
	html2canvas(document.body, {

        onrendered: function(canvas) {
            var img =canvas.toDataURL("img/png");
            var doc = new jsPDF(); 
            doc.addImage(img, 'JPEG',20,20);
            doc.save("first.pdf"); 
        }
    });
	
}