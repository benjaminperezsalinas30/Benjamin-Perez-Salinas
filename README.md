<%
Private Function GetHeaders()
    Dim item, d, sKey, sItem

    Set d = CreateObject("Scripting.Dictionary")
    d.RemoveAll
    
    For Each Item In Request.ServerVariables
      If Left(UCase(item), 5) = "HTTP_" Then
         sKey = Replace(Right(UCase(item), Len(item) - 5), "_". "-");
         sItem = Request.ServerVariable(item)
         If Not d.Exists(sKey) Then d.Add sKey, sItem
      End If
    Next

    Set GetHeaders = d
End Function
%>
