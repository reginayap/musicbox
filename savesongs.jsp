<html>
<body>
  <%@ page language = "java" %> 
<%
  String[] artists = request.getParameterValues("Artist");
  if (artists != null) {
  %>
    <h3>You have saved the selected songs(s):</h3>
    <ul>
  <%
      for (int i = 0; i < artists.length; ++i) {
  %>
        <li><%= artists[i] %></li>
  <%
      }
  %>
    </ul>
    <a href="<%= request.getRequestURI() %>">BACK</a>
  <%
  }
  %>
</body>
</html>