<html>
<head>
</head>
<body>
<%@ page language="java" %>

<jsp:useBean id="counter" scope="session" class="beans.Counter" />

<jsp:setProperty name="counter" property="count" param="count" />
<%

    out.println("Current Music Box Page Count Is : " + counter.getCount() + "<BR>");
	out.println ("Click your browser back button to return to Music Box");

%>

</body>
</html>