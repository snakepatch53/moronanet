<script src="<?= $DATA['http_domain'] ?>public/library.general/swiper/swiper-bundle.min.js"></script>
<script src="<?= $DATA['http_domain'] ?>public/library.general/smooth-scroll.min.js"></script>
<script src="<?= $DATA['http_domain'] ?>public/library.general/smooth-scroll-config.js"></script>
<script src="<?= $DATA['http_domain'] ?>public/library.general/moment-with-locales.min.js"></script>
<script>
    moment.locale('es');
    moment.lang('es', {
        months: 'Enero_Febrero_Marzo_Abril_Mayo_Junio_Julio_Agosto_Septiembre_Octubre_Noviembre_Diciembre'.split('_'),
        monthsShort: 'Enero._Feb._Mar_Abr._May_Jun_Jul._Ago_Sept._Oct._Nov._Dec.'.split('_'),
        weekdays: 'Domingo_Lunes_Martes_Miercoles_Jueves_Viernes_Sabado'.split('_'),
        weekdaysShort: 'Dom._Lun._Mar._Mier._Jue._Vier._Sab.'.split('_'),
        weekdaysMin: 'Do_Lu_Ma_Mi_Ju_Vi_Sa'.split('_')
    });
</script>
<script src="<?= $DATA['http_domain'] ?>public/js.public/template.js"></script>