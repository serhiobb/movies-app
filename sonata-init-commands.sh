./app/console sonata:admin:generate --bundle=AppBundle --controller=AlbumAdminController --admin=AlbumAdmin -n -vvv  AppBundle\\Entity\\Album &&
./app/console sonata:admin:generate --bundle=AppBundle --controller=ArtistAdminController --admin=ArtistAdmin -n -vvv  AppBundle\\Entity\\Artist &&
./app/console sonata:admin:generate --bundle=AppBundle --controller=CustomerAdminController --admin=CustomerAdmin -n -vvv  AppBundle\\Entity\\Customer &&
./app/console sonata:admin:generate --bundle=AppBundle --controller=EmployeeAdminController --admin=EmployeeAdmin -n -vvv  AppBundle\\Entity\\Employee &&
./app/console sonata:admin:generate --bundle=AppBundle --controller=GenreAdminController --admin=GenreAdmin -n -vvv  AppBundle\\Entity\\Genre &&
./app/console sonata:admin:generate --bundle=AppBundle --controller=InvoiceAdminController --admin=InvoiceAdmin -n -vvv  AppBundle\\Entity\\Invoice &&
./app/console sonata:admin:generate --bundle=AppBundle --controller=InvoicelineAdminController --admin=InvoicelineAdmin -n -vvv  AppBundle\\Entity\\Invoiceline &&
./app/console sonata:admin:generate --bundle=AppBundle --controller=MediatypeAdminController --admin=MediatypeAdmin -n -vvv  AppBundle\\Entity\\Mediatype &&
./app/console sonata:admin:generate --bundle=AppBundle --controller=PlaylistAdminController --admin=PlaylistAdmin -n -vvv  AppBundle\\Entity\\Playlist &&
./app/console sonata:admin:generate --bundle=AppBundle --controller=TrackAdminController --admin=TrackAdmin -n -vvv  AppBundle\\Entity\\Track
app/console voryx:generate:rest --entity="AppBundle:Album" --route-prefix='/api' --resource --document -n &&
app/console voryx:generate:rest --entity="AppBundle:Artist" --route-prefix='/api' --resource --document -n &&
app/console voryx:generate:rest --entity="AppBundle:Customer" --route-prefix='/api' --resource --document -n &&
app/console voryx:generate:rest --entity="AppBundle:Employee" --route-prefix='/api' --resource --document -n &&
app/console voryx:generate:rest --entity="AppBundle:Genre" --route-prefix='/api' --resource --document -n &&
app/console voryx:generate:rest --entity="AppBundle:Invoice" --route-prefix='/api' --resource --document -n &&
app/console voryx:generate:rest --entity="AppBundle:Invoiceline" --route-prefix='/api' --resource --document -n &&
app/console voryx:generate:rest --entity="AppBundle:Mediatype" --route-prefix='/api' --resource --document -n &&
app/console voryx:generate:rest --entity="AppBundle:Playlist" --route-prefix='/api' --resource --document -n &&
app/console voryx:generate:rest --entity="AppBundle:Track" --route-prefix='/api' --resource --document -n