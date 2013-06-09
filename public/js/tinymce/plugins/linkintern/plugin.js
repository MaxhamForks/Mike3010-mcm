(function() {

	var tinymceEditor;
	
	getAjax = function() {
		
		//antwort bauen - test!
		html = '<hr />'
		+ '<input type="radio" name="linkinternResultRadio" link="link/to/page/1" class="linkinternResultRadio" />List Item 1<br />'	
		+ '<input type="radio" name="linkinternResultRadio" link="link/to/page/2" class="linkinternResultRadio" />List Item 2<br />'	
		+ '<input type="radio" name="linkinternResultRadio" link="link/to/page/3" class="linkinternResultRadio" />List Item 3<br />';
		
		//todo - hier ajax request einfügen!!!
		
		//steuerelemente an antwort hängen
		html += '<hr />'
		+ '<input type="text" id="linkInternLinkText" /> <input type="Button" id="linkinternInsertButton" value="Link einfügen" />';
		
		//dialog erweitern
		$('#linkinternResult').html(html);
		
		//click event für neuen button abonieren
		$('#linkinternInsertButton').click(insertLink);
	};
	
	insertLink = function() {
		
		link = $('.linkinternResultRadio:checked').attr('link');
		text = $('#linkInternLinkText').val();
		
		//validierung
		if(link == undefined || text == '') {
			alert('Bitte einen Eintrag auswählen und einen Link Text eingeben!!');
			return;
		}
		
		//link bauen
		content = '<a href="'+link+'">'+text+'</a>';
    	
		//insert link into editor
		tinymceEditor.insertContent(content);
		
		//close dialog
		$('#linkinternDialog').dialog('destroy');
	}
	
	function openDialog() {
		
		//dialog zusammen bauen
		jQuery('<div/>', {
		    id: 'linkinternDialog',
		    title: 'Internen Link einfügen',
		    html: '<table>'
		    	+ '<tr>'
		    	+ '<td>Typ</td>'
		    	+ '<td width="20"></td>'
		    	+ '<td><select id="linkinternType"><option>Article</option><option>Report</option></select></td>'
		    	+ '</tr>'
		    	+ '<tr>'
		    	+ '<td>Titel</td>'
		    	+ '<td></td>'
		    	+ '<td><input id="linkinternTitle" type="text" /></td>'
		    	+ '</tr>'
		    	+ '<tr>'
		    	+ '<td></td>'
		    	+ '<td></td>'
		    	+ '<td><input id="linkinternSearchButton" type="submit" value="Suchen" /></td>'
		    	+ '</tr>'
		    	+ '</table>'
		    	+ '<div id="linkinternResult"></div>'
		}).dialog({
			close: function( event, ui ) {
				
				//destroy dialog on close 
				$('#linkinternDialog').dialog('destroy');
			}
		});
		
		//event für neuen button abonieren
		$('#linkinternSearchButton').click(getAjax);
	}
	
	tinymce.PluginManager.add('linkintern', function(editor, url) {
	    // Add a button that opens a window
	    editor.addButton('linkintern', {
	        text: 'Interner Link',
	        icon: false,
	        onclick: function() {
	        	//open jQuery Dialog!
	        	openDialog();
	        	
	        	//referenz auf editor bereitstellen
	        	tinymceEditor = editor;
	        }
	    });
	});
})();