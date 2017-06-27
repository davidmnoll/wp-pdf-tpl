# wp-pdf-tpl
Create page templates that output PDFs


To Use:

--Create template subdirectory /pdfs/ in your theme (or child theme) directory.  

--Add template files that output HTML formatted how you want your PDF

--Go to page, templates will be available in "page templates" dropdown.

--go to "View Page" and you should see your PDF

NOTE: the HTML in your template file must be compatible with DomPDF.  It can reference stylesheets outside the document, and most HTML functions will work as expected, but there may be some kinks
