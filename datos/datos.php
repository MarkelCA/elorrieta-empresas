<?php

//Array de familias profesionales
$familia['AD'] = array(
    'titulo' => 'Administración y Gestión',
    'img' => 'img/svg/stats.svg'
);

$familia['CM'] = array(
    'titulo' => 'Comercio y Marketing',
    'img' => 'img/svg/social-media-marketing.svg'

);
$familia['EO'] = array(
    'titulo' => 'Edificación y Obra Civil',
    'img' => 'img/svg/engineer.svg'
);
$familia['EE'] = array(
    'titulo' => 'Electricidad-Electrónica',
    'img' => 'img/svg/circuit.svg'
);
$familia['FM'] = array(
    'titulo' => 'Fabricación Mecánica',
    'img' => 'img/svg/construction.svg'
);
$familia['HT'] = array(
    'titulo' => 'Hostelería y Turismo',
    'img' => 'img/svg/travel-guide.svg'
);
$familia['IN'] = array(
    'titulo' => 'Informática y Comunicación',
    'img' => 'img/svg/document.svg'
);
$familia['IM'] = array(
    'titulo' => 'Instalación y Mantenimiento',
    'img' => 'img/svg/wrench.svg'
);

$familia['QU'] = array(
    'titulo' => 'Química',
    'img' => 'img/svg/chemistry.svg'
);

//Array de ciclos
$ciclo['AD'][] = array(
	'tipo' => 'Superior',
	'nombre' => 'Administración y Finanzas',
	'codigo' => 'ADAF3',
	'horas' => '2000'
);
$ciclo['AD'][] = array(
	'tipo' => 'Superior',
	'nombre' => 'Asistencia a la Dirección',
	'codigo' => 'ADAD3',
	'horas' => '2000'
);
$ciclo['CM'][] = array(
	'tipo' => 'Superior',
	'nombre' => 'Comercio Internacional',
	'codigo' => 'CMCI3',
	'horas' => '2000'
);
$ciclo['CM'][] = array(
	'tipo' => 'Medio',
	'nombre' => 'Actividades Comerciales',
	'codigo' => 'CMAC2',
	'horas' => '2000'
);
$ciclo['EO'][] = array(
	'tipo' => 'Superior',
	'nombre' => 'Proyectos de Obra Civil',
	'codigo' => 'EOPO3',
	'horas' => '2000'
);
$ciclo['EE'][] = array(
	'tipo' => 'Superior',
	'nombre' => 'Sistemas electrotécnicos y automatizados',
	'codigo' => 'EESA3',
	'horas' => '2000'
);
$ciclo['EE'][] = array(
	'tipo' => 'Medio',
	'nombre' => 'Instalaciones eléctricas y automáticas',
	'codigo' => 'EEIA2',
	'horas' => '2000'
);
$ciclo['FM'][] = array(
	'tipo' => 'Superior',
	'nombre' => 'Diseño en fabricación mecánica',
	'codigo' => 'FMDF3',
	'horas' => '2000'
);
$ciclo['FM'][] = array(
	'tipo' => 'Superior',
	'nombre' => 'Programación de la producción en Fabricación Mecánica',
	'codigo' => 'FMPP3',
	'horas' => '2000'
);
$ciclo['FM'][] = array(
	'tipo' => 'Medio',
	'nombre' => 'Mecanizado',
	'codigo' => 'FMME2',
	'horas' => '2000'
);
$ciclo['FM'][] = array(
	'tipo' => 'Medio',
	'nombre' => 'Soldadura y calderería',
	'codigo' => 'FMSC2',
	'horas' => '2000'
);
$ciclo['HT'][] = array(
	'tipo' => 'Superior',
	'nombre' => 'Agencias de viajes y gestión de eventos',
	'codigo' => 'HTAV3',
	'horas' => '2000'
);
$ciclo['HT'][] = array(
	'tipo' => 'Superior',
	'nombre' => 'Guía, información y asistencias turísticas',
	'codigo' => 'HTGI3',
	'horas' => '2000'
);
$ciclo['IN'][] = array(
	'tipo' => 'Superior',
	'nombre' => 'Administración de sistemas informáticos en red',
	'codigo' => 'INAR3',
	'horas' => '2000'
);
$ciclo['IN'][] = array(
	'tipo' => 'Superior',
	'nombre' => 'Desarrollo de Aplicaciones Multiplataforma',
	'codigo' => 'INDM3',
	'horas' => '2000'
);
$ciclo['IN'][] = array(
	'tipo' => 'Superior',
	'nombre' => 'Desarrollo de aplicaciones web',
	'codigo' => 'INDW3',
	'horas' => '2000'
);
$ciclo['IN'][] = array(
	'tipo' => 'Medio',
	'nombre' => 'Sistemas microinformáticos y Redes',
	'codigo' => 'INSM2',
	'horas' => '2000'
);
$ciclo['IM'][] = array(
	'tipo' => 'Superior',
	'nombre' => 'Mantenimiento de instalaciones térmicas y de fluidos',
	'codigo' => 'IMMI3',
	'horas' => '2000'
);
$ciclo['QU'][] = array(
	'tipo' => 'Superior',
	'nombre' => 'Laboratorio de análisis y control de calidad',
	'codigo' => 'QULA3',
	'horas' => '2000'
);
$ciclo['QU'][] = array(
	'tipo' => 'Medio',
	'nombre' => 'Operaciones de Laboratorio',
	'codigo' => 'QUOL2',
	'horas' => '2000'
);
//Array de modulos
$modulos['ADAF3']['primero'][] = array(
	'codigo' => '0648',
	'nombre' => 'Recursos Humanos y responsabilidad social corporativa',
	'horas' => '99'
);
$modulos['ADAF3']['primero'][] = array(
	'codigo' => '0649',
	'nombre' => 'Ofimática y proceso de la información',
	'horas' => '231'
);
$modulos['ADAF3']['primero'][] = array(
	'codigo' => '0650',
	'nombre' => 'Proceso integral de la actividad comercial',
	'horas' => '198'
);
$modulos['ADAF3']['primero'][] = array(
	'codigo' => '0651',
	'nombre' => 'Comunicación y atención al cliente',
	'horas' => '132'
);
$modulos['ADAF3']['primero'][] = array(
	'codigo' => '0179',
	'nombre' => 'Inglés',
	'horas' => '132'
);
$modulos['ADAF3']['primero'][] = array(
	'codigo' => '0652',
	'nombre' => 'Gestión de Recursos Humanos',
	'horas' => '99'
);
$modulos['ADAF3']['primero'][] = array(
	'codigo' => '0658',
	'nombre' => 'Formación y Orientación Laboral',
	'horas' => '99'
);
$modulos['ADAF3']['segundo'][] = array(
	'codigo' => '0647',
	'nombre' => 'Gestión de la documentación jurídica y empresarial',
	'horas' => '100'
);
$modulos['ADAF3']['segundo'][] = array(
	'codigo' => '0653',
	'nombre' => 'Gestión financiera',
	'horas' => '120'
);
$modulos['ADAF3']['segundo'][] = array(
	'codigo' => '0654',
	'nombre' => 'Contabilidad y fiscalidad',
	'horas' => '180'
);
$modulos['ADAF3']['segundo'][] = array(
	'codigo' => '0655',
	'nombre' => 'Gestión logística y comercial',
	'horas' => '80'
);
$modulos['ADAF3']['segundo'][] = array(
	'codigo' => '0656',
	'nombre' => 'Simulación empresarial',
	'horas' => '120'
);
$modulos['ADAF3']['segundo'][] = array(
	'codigo' => '0657',
	'nombre' => 'Proyecto de Administración y Finanzas',
	'horas' => '50'
);
$modulos['ADAF3']['segundo'][] = array(
	'codigo' => '0660',
	'nombre' => 'Formación en Centros de Trabajo',
	'horas' => '360'
);
$modulos['ADAD3']['primero'][] = array(
	'codigo' => '0648',
	'nombre' => 'Recursos Humanos y responsabilidad social corporativa',
	'horas' => '99'
);
$modulos['ADAD3']['primero'][] = array(
	'codigo' => '0649',
	'nombre' => 'Ofimática y proceso de la información',
	'horas' => '231'
);
$modulos['ADAD3']['primero'][] = array(
	'codigo' => '0650',
	'nombre' => 'Proceso integral de la actividad comercial',
	'horas' => '231'
);
$modulos['ADAD3']['primero'][] = array(
	'codigo' => '0651',
	'nombre' => 'Comunicación y atención al cliente',
	'horas' => '132'
);
$modulos['ADAD3']['primero'][] = array(
	'codigo' => '0179',
	'nombre' => 'Inglés',
	'horas' => '132'
);
$modulos['ADAD3']['primero'][] = array(
	'codigo' => '0665',
	'nombre' => 'Formación y Orientación Laboral',
	'horas' => '99'
);
$modulos['ADAD3']['segundo'][] = array(
	'codigo' => '0647',
	'nombre' => 'Gestión de la documentación jurídica y empresarial',
	'horas' => '100'
);
$modulos['ADAD3']['segundo'][] = array(
	'codigo' => '0180',
	'nombre' => 'Segunda lengua extranjera',
	'horas' => '120'
);
$modulos['ADAD3']['segundo'][] = array(
	'codigo' => '0661',
	'nombre' => 'Protocolo empresarial',
	'horas' => '120'
);
$modulos['ADAD3']['segundo'][] = array(
	'codigo' => '0662',
	'nombre' => 'Organización de eventos empresariales',
	'horas' => '140'
);
$modulos['ADAD3']['segundo'][] = array(
	'codigo' => '0663',
	'nombre' => 'Gestión avanzada de la información',
	'horas' => '120'
);
$modulos['ADAD3']['segundo'][] = array(
	'codigo' => '0664',
	'nombre' => 'Proyecto de Asistencia a la Dirección',
	'horas' => '50'
);
$modulos['ADAD3']['segundo'][] = array(
	'codigo' => '0667',
	'nombre' => 'Formación en Centros de Trabajo',
	'horas' => '360'
);
$modulos['CMCI3']['primero'][] = array(
	'codigo' => '0622',
	'nombre' => 'Transporte internacional de mercancías',
	'horas' => '198'
);
$modulos['CMCI3']['primero'][] = array(
	'codigo' => '0627',
	'nombre' => 'Gestión administrativa del comercio internacional',
	'horas' => '198'
);
$modulos['CMCI3']['primero'][] = array(
	'codigo' => '0623',
	'nombre' => 'Gestión económica y financiera de la empresa',
	'horas' => '198'
);
$modulos['CMCI3']['primero'][] = array(
	'codigo' => '0625',
	'nombre' => 'Logística de almacenamiento',
	'horas' => '132'
);
$modulos['CMCI3']['primero'][] = array(
	'codigo' => '0179',
	'nombre' => 'Inglés',
	'horas' => '165'
);
$modulos['CMCI3']['primero'][] = array(
	'codigo' => '0829',
	'nombre' => 'Formación y Orientación Laboral',
	'horas' => '99'
);
$modulos['CMCI3']['segundo'][] = array(
	'codigo' => '0822',
	'nombre' => 'Sistema de información de mercados',
	'horas' => '80'
);
$modulos['CMCI3']['segundo'][] = array(
	'codigo' => '0823',
	'nombre' => 'Marketing internacional',
	'horas' => '140'
);
$modulos['CMCI3']['segundo'][] = array(
	'codigo' => '0827',
	'nombre' => 'Comercio digital internacional',
	'horas' => '80'
);
$modulos['CMCI3']['segundo'][] = array(
	'codigo' => '0824',
	'nombre' => 'Negociación internacional',
	'horas' => '100'
);
$modulos['CMCI3']['segundo'][] = array(
	'codigo' => '0825',
	'nombre' => 'Financiación internacional',
	'horas' => '140'
);
$modulos['CMCI3']['segundo'][] = array(
	'codigo' => '0826',
	'nombre' => 'Medios de pago internacionales',
	'horas' => '100'
);
$modulos['CMCI3']['segundo'][] = array(
	'codigo' => '0828',
	'nombre' => 'Proyecto de comercio internacional',
	'horas' => '50'
);
$modulos['CMCI3']['segundo'][] = array(
	'codigo' => '0830',
	'nombre' => 'Formación en Centros de Trabajo',
	'horas' => '360'
);
$modulos['CMAC2']['primero'][] = array(
	'codigo' => '1226',
	'nombre' => 'Marketing en la actividad comercial',
	'horas' => '165'
);
$modulos['CMAC2']['primero'][] = array(
	'codigo' => '1228',
	'nombre' => 'Técnicas de almacén',
	'horas' => '99'
);
$modulos['CMAC2']['primero'][] = array(
	'codigo' => '1229',
	'nombre' => 'Gestión de compras',
	'horas' => '99'
);
$modulos['CMAC2']['primero'][] = array(
	'codigo' => '1232',
	'nombre' => 'Procesos de venta',
	'horas' => '165'
);
$modulos['CMAC2']['primero'][] = array(
	'codigo' => '1233',
	'nombre' => 'Aplicaciones informáticas para el comercio',
	'horas' => '165'
);
$modulos['CMAC2']['primero'][] = array(
	'codigo' => '1235',
	'nombre' => 'Comercio electrónico',
	'horas' => '132'
);
$modulos['CMAC2']['primero'][] = array(
	'codigo' => '0156',
	'nombre' => 'Inglés',
	'horas' => '165'
);
$modulos['CMAC2']['segundo'][] = array(
	'codigo' => '1227',
	'nombre' => 'Gestión de un pequeño comercio',
	'horas' => '168'
);
$modulos['CMAC2']['segundo'][] = array(
	'codigo' => '1230',
	'nombre' => 'Venta técnica',
	'horas' => '126'
);
$modulos['CMAC2']['segundo'][] = array(
	'codigo' => '1231',
	'nombre' => 'Dinamización del punto de venta',
	'horas' => '147'
);
$modulos['CMAC2']['segundo'][] = array(
	'codigo' => '1234',
	'nombre' => 'Servicios de atención comercial',
	'horas' => '84'
);
$modulos['CMAC2']['segundo'][] = array(
	'codigo' => '1236',
	'nombre' => 'Formación y Orientación Laboral',
	'horas' => '105'
);
$modulos['CMAC2']['segundo'][] = array(
	'codigo' => '1237',
	'nombre' => 'Formación en Centros de Trabajo',
	'horas' => '380'
);
$modulos['EOPO3']['primero'][] = array(
	'codigo' => '0562',
	'nombre' => 'Estructuras de construcción',
	'horas' => '99'
);
$modulos['EOPO3']['primero'][] = array(
	'codigo' => '0563',
	'nombre' => 'Representaciones de construcción',
	'horas' => '330'
);
$modulos['EOPO3']['primero'][] = array(
	'codigo' => '0564',
	'nombre' => 'Mediciones y valoraciones de construcción',
	'horas' => '99'
);
$modulos['EOPO3']['primero'][] = array(
	'codigo' => '0769',
	'nombre' => 'Urbanismo y obra civil',
	'horas' => '99'
);
$modulos['EOPO3']['primero'][] = array(
	'codigo' => '0770',
	'nombre' => 'Redes y servicios en obra civil',
	'horas' => '99'
);
$modulos['EOPO3']['primero'][] = array(
	'codigo' => '0771',
	'nombre' => 'Levantamientos topográficos',
	'horas' => '165'
);
$modulos['EOPO3']['primero'][] = array(
	'codigo' => '0775',
	'nombre' => 'Formación y Orientación Laboral',
	'horas' => '99'
);
$modulos['EOPO3']['segundo'][] = array(
	'codigo' => '0565',
	'nombre' => 'Replanteos de construcción',
	'horas' => '120'
);
$modulos['EOPO3']['segundo'][] = array(
	'codigo' => '0566',
	'nombre' => 'Planificación de construcción',
	'horas' => '80'
);
$modulos['EOPO3']['segundo'][] = array(
	'codigo' => '0772',
	'nombre' => 'Desarrollo de proyectos urbanísticos',
	'horas' => '180'
);
$modulos['EOPO3']['segundo'][] = array(
	'codigo' => '0773',
	'nombre' => 'Desarrollo de proyectos de obras lineales',
	'horas' => '120'
);
$modulos['EOPO3']['segundo'][] = array(
	'codigo' => '0774',
	'nombre' => 'Proyecto en obra civil',
	'horas' => '50'
);
$modulos['EOPO3']['segundo'][] = array(
	'codigo' => 'E200',
	'nombre' => 'Inglés técnico',
	'horas' => '40'
);
$modulos['EOPO3']['segundo'][] = array(
	'codigo' => '0776',
	'nombre' => 'Empresa e iniciativa emprendedora',
	'horas' => '60'
);
$modulos['EOPO3']['segundo'][] = array(
	'codigo' => '0777',
	'nombre' => 'Formación en Centros de Trabajo',
	'horas' => '360'
);
$modulos['EESA3']['primero'][] = array(
	'codigo' => '0517',
	'nombre' => 'Procesos en instalaciones de infraestructuras comunes de telecomunicaciones',
	'horas' => '165'
);
$modulos['EESA3']['primero'][] = array(
	'codigo' => '0518',
	'nombre' => 'Técnicas y procesos en instalaciones eléctricas',
	'horas' => '198'
);
$modulos['EESA3']['primero'][] = array(
	'codigo' => '0519',
	'nombre' => 'Documentación técnica en instalaciones eléctricas',
	'horas' => '66'
);
$modulos['EESA3']['primero'][] = array(
	'codigo' => '0520',
	'nombre' => 'Sistemas y circuitos eléctricos',
	'horas' => '165'
);
$modulos['EESA3']['primero'][] = array(
	'codigo' => '0524',
	'nombre' => 'Configuración de instalaciones eléctricas',
	'horas' => '198'
);
$modulos['EESA3']['primero'][] = array(
	'codigo' => '0602',
	'nombre' => 'Gestión del montaje y mantenimiento de instalaciones',
	'horas' => '99'
);
$modulos['EESA3']['primero'][] = array(
	'codigo' => '0527',
	'nombre' => 'Formación y Orientación Laboral',
	'horas' => '99'
);
$modulos['EESA3']['segundo'][] = array(
	'codigo' => '0521',
	'nombre' => 'Técnicas y procesos en instalaciones domóticas',
	'horas' => '180'
);
$modulos['EESA3']['segundo'][] = array(
	'codigo' => '0522',
	'nombre' => 'Desarrollo de redes eléctricas y centros de transformación',
	'horas' => '160'
);
$modulos['EESA3']['segundo'][] = array(
	'codigo' => '0523',
	'nombre' => 'Configuración de instalaciones domóticas y automáticas',
	'horas' => '160'
);
$modulos['EESA3']['segundo'][] = array(
	'codigo' => '0526',
	'nombre' => 'Proyecto de sistemas electrotécnicos y automatizados',
	'horas' => '50'
);
$modulos['EESA3']['segundo'][] = array(
	'codigo' => 'E200',
	'nombre' => 'Inglés técnico',
	'horas' => '40'
);
$modulos['EESA3']['segundo'][] = array(
	'codigo' => '0528',
	'nombre' => 'Empresa e iniciativa emprendedora',
	'horas' => '60'
);
$modulos['EESA3']['segundo'][] = array(
	'codigo' => '0529',
	'nombre' => 'Formación en Centros de Trabajo',
	'horas' => '360'
);
$modulos['EEIA2']['primero'][] = array(
	'codigo' => '0232',
	'nombre' => 'Automatismos industriales',
	'horas' => '264'
);
$modulos['EEIA2']['primero'][] = array(
	'codigo' => '0233',
	'nombre' => 'Electrónica',
	'horas' => '132'
);
$modulos['EEIA2']['primero'][] = array(
	'codigo' => '0234',
	'nombre' => 'Electrotecnia',
	'horas' => '198'
);
$modulos['EEIA2']['primero'][] = array(
	'codigo' => '0235',
	'nombre' => 'Instalaciones eléctricas interiores',
	'horas' => '297'
);
$modulos['EEIA2']['primero'][] = array(
	'codigo' => '0239',
	'nombre' => 'Instalaciones solares fotovoltáicas',
	'horas' => '66'
);
$modulos['EEIA2']['primero'][] = array(
	'codigo' => 'E100',
	'nombre' => 'Inglés técnico',
	'horas' => '33'
);
$modulos['EEIA2']['segundo'][] = array(
	'codigo' => '0236',
	'nombre' => 'Instalaciones de distribución',
	'horas' => '105'
);
$modulos['EEIA2']['segundo'][] = array(
	'codigo' => '0237',
	'nombre' => 'Infraestructuras comunes de telecomunicación en viviendas y edificios',
	'horas' => '105'
);
$modulos['EEIA2']['segundo'][] = array(
	'codigo' => '0238',
	'nombre' => 'Instalaciones domóticas',
	'horas' => '126'
);
$modulos['EEIA2']['segundo'][] = array(
	'codigo' => '0240',
	'nombre' => 'Máquinas eléctricas',
	'horas' => '126'
);
$modulos['EEIA2']['segundo'][] = array(
	'codigo' => '0241',
	'nombre' => 'Formación y Orientación Laboral',
	'horas' => '105'
);
$modulos['EEIA2']['segundo'][] = array(
	'codigo' => '0242',
	'nombre' => 'Empresa e iniciativa emprendedora',
	'horas' => '63'
);
$modulos['EEIA2']['segundo'][] = array(
	'codigo' => '0243',
	'nombre' => 'Formación en Centros de Trabajo',
	'horas' => '380'
);
$modulos['FMDF3']['primero'][] = array(
	'codigo' => '0245',
	'nombre' => 'Representación gráfica en fabricación mecánica',
	'horas' => '198'
);
$modulos['FMDF3']['primero'][] = array(
	'codigo' => '0247',
	'nombre' => 'Diseño de productos mecánicos',
	'horas' => '297'
);
$modulos['FMDF3']['primero'][] = array(
	'codigo' => '0431',
	'nombre' => 'Automatización de la fabricación',
	'horas' => '198'
);
$modulos['FMDF3']['primero'][] = array(
	'codigo' => '0432',
	'nombre' => 'Técnicas de fabricación mecánica',
	'horas' => '198'
);
$modulos['FMDF3']['primero'][] = array(
	'codigo' => '0434',
	'nombre' => 'Formación y Orientación Laboral',
	'horas' => '99'
);
$modulos['FMDF3']['segundo'][] = array(
	'codigo' => '0428',
	'nombre' => 'Diseño de útiles de procesado de chapa y estampación',
	'horas' => '240'
);
$modulos['FMDF3']['segundo'][] = array(
	'codigo' => '0429',
	'nombre' => 'Diseño de moldes y modelos de fundición',
	'horas' => '120'
);
$modulos['FMDF3']['segundo'][] = array(
	'codigo' => '0430',
	'nombre' => 'Diseño de moldes para productos poliméricos',
	'horas' => '140'
);
$modulos['FMDF3']['segundo'][] = array(
	'codigo' => '0433',
	'nombre' => 'Proyecto de diseño de productos mecánicos',
	'horas' => '50'
);
$modulos['FMDF3']['segundo'][] = array(
	'codigo' => 'E200',
	'nombre' => 'Inglés técnico',
	'horas' => '40'
);
$modulos['FMDF3']['segundo'][] = array(
	'codigo' => '0435',
	'nombre' => 'Empresa e iniciativa emprendedora',
	'horas' => '60'
);
$modulos['FMDF3']['segundo'][] = array(
	'codigo' => '0436',
	'nombre' => 'Formación en Centros de Trabajo',
	'horas' => '360'
);
$modulos['FMPP3']['primero'][] = array(
	'codigo' => '0007',
	'nombre' => 'Interpretación gráfica',
	'horas' => '132'
);
$modulos['FMPP3']['primero'][] = array(
	'codigo' => '0160',
	'nombre' => 'Definición de procesos de mecanizado, conformado y montaje',
	'horas' => '231'
);
$modulos['FMPP3']['primero'][] = array(
	'codigo' => '0164',
	'nombre' => 'Ejecución de procesos de fabricación',
	'horas' => '198'
);
$modulos['FMPP3']['primero'][] = array(
	'codigo' => '0165',
	'nombre' => 'Gestión de la calidad, prevención de riesgos laborales y protección ambiental',
	'horas' => '165'
);
$modulos['FMPP3']['primero'][] = array(
	'codigo' => '0166',
	'nombre' => 'Verificación de productos',
	'horas' => '165'
);
$modulos['FMPP3']['primero'][] = array(
	'codigo' => '0168',
	'nombre' => 'Formación y Orientación Laboral',
	'horas' => '99'
);
$modulos['FMPP3']['segundo'][] = array(
	'codigo' => '0002',
	'nombre' => 'Mecanizado por control numérico',
	'horas' => '240'
);
$modulos['FMPP3']['segundo'][] = array(
	'codigo' => '0161',
	'nombre' => 'Fabricación asistida por ordenador',
	'horas' => '40'
);
$modulos['FMPP3']['segundo'][] = array(
	'codigo' => '0162',
	'nombre' => 'Programación de sistemas automáticos de fabricación mecánica',
	'horas' => '100'
);
$modulos['FMPP3']['segundo'][] = array(
	'codigo' => '0163',
	'nombre' => 'Programación de la produccción',
	'horas' => '120'
);
$modulos['FMPP3']['segundo'][] = array(
	'codigo' => '0167',
	'nombre' => 'Proyecto de fabricación de productos mecánicos',
	'horas' => '50'
);
$modulos['FMPP3']['segundo'][] = array(
	'codigo' => 'E200',
	'nombre' => 'Inglés técnico',
	'horas' => '40'
);
$modulos['FMPP3']['segundo'][] = array(
	'codigo' => '0169',
	'nombre' => 'Empresa e iniciativa emprendedora',
	'horas' => '60'
);
$modulos['FMPP3']['segundo'][] = array(
	'codigo' => '0170',
	'nombre' => 'Formación en Centros de Trabajo',
	'horas' => '360'
);
$modulos['FMME2']['primero'][] = array(
	'codigo' => '0001',
	'nombre' => 'Procesos de mecanizado',
	'horas' => '165'
);
$modulos['FMME2']['primero'][] = array(
	'codigo' => '0004',
	'nombre' => 'Fabricación por arranque de viruta',
	'horas' => '363'
);
$modulos['FMME2']['primero'][] = array(
	'codigo' => '0005',
	'nombre' => 'Sistemas automatizados',
	'horas' => '165'
);
$modulos['FMME2']['primero'][] = array(
	'codigo' => '0006',
	'nombre' => 'Metrología y ensayos',
	'horas' => '132'
);
$modulos['FMME2']['primero'][] = array(
	'codigo' => '0007',
	'nombre' => 'Interpretación gráfica',
	'horas' => '132'
);
$modulos['FMME2']['primero'][] = array(
	'codigo' => 'E100',
	'nombre' => 'Inglés técnico',
	'horas' => '33'
);
$modulos['FMME2']['segundo'][] = array(
	'codigo' => '0002',
	'nombre' => 'Mecanizado por control numérico',
	'horas' => '252'
);
$modulos['FMME2']['segundo'][] = array(
	'codigo' => '0003',
	'nombre' => 'Fabricación por abrasión, electroerosión, corte y conformado y por procesos especiales',
	'horas' => '210'
);
$modulos['FMME2']['segundo'][] = array(
	'codigo' => '0008',
	'nombre' => 'Formación y Orientación Laboral',
	'horas' => '105'
);
$modulos['FMME2']['segundo'][] = array(
	'codigo' => '0009',
	'nombre' => 'Empresa e iniciativa emprendedora',
	'horas' => '63'
);
$modulos['FMME2']['segundo'][] = array(
	'codigo' => '0010',
	'nombre' => 'Formación en Centros de Trabajo',
	'horas' => '380'
);
$modulos['FMSC2']['primero'][] = array(
	'codigo' => '0007',
	'nombre' => 'Interpretación gráfica',
	'horas' => '132'
);
$modulos['FMSC2']['primero'][] = array(
	'codigo' => '0091',
	'nombre' => 'Trazado, corte y conformado',
	'horas' => '264'
);
$modulos['FMSC2']['primero'][] = array(
	'codigo' => '0092',
	'nombre' => 'Mecanizado',
	'horas' => '165'
);
$modulos['FMSC2']['primero'][] = array(
	'codigo' => '0093',
	'nombre' => 'Soldadura en atmósfera natural',
	'horas' => '264'
);
$modulos['FMSC2']['primero'][] = array(
	'codigo' => '0006',
	'nombre' => 'Metrología y ensayos',
	'horas' => '132'
);
$modulos['FMSC2']['primero'][] = array(
	'codigo' => 'E100',
	'nombre' => 'Inglés técnico',
	'horas' => '33'
);
$modulos['FMSC2']['segundo'][] = array(
	'codigo' => '0094',
	'nombre' => 'Soldadura en atmósfera protegida',
	'horas' => '231'
);
$modulos['FMSC2']['segundo'][] = array(
	'codigo' => '0095',
	'nombre' => 'Montaje',
	'horas' => '231'
);
$modulos['FMSC2']['segundo'][] = array(
	'codigo' => '0096',
	'nombre' => 'Formación y Orientación Laboral',
	'horas' => '105'
);
$modulos['FMSC2']['segundo'][] = array(
	'codigo' => '0097',
	'nombre' => 'Empresa e iniciativa emprendedora',
	'horas' => '63'
);
$modulos['FMSC2']['segundo'][] = array(
	'codigo' => '0098',
	'nombre' => 'Formación en Centros de Trabajo',
	'horas' => '380'
);
$modulos['HTAV3']['primero'][] = array(
	'codigo' => '0171',
	'nombre' => 'Estructura del mercado turístico',
	'horas' => '132'
);
$modulos['HTAV3']['primero'][] = array(
	'codigo' => '0172',
	'nombre' => 'Protocolo y relaciones públicas',
	'horas' => '132'
);
$modulos['HTAV3']['primero'][] = array(
	'codigo' => '0173',
	'nombre' => 'Marketing turístico',
	'horas' => '132'
);
$modulos['HTAV3']['primero'][] = array(
	'codigo' => '0383',
	'nombre' => 'Destinos turísticos',
	'horas' => '165'
);
$modulos['HTAV3']['primero'][] = array(
	'codigo' => '0384',
	'nombre' => 'Recursos turísticos',
	'horas' => '165'
);
$modulos['HTAV3']['primero'][] = array(
	'codigo' => '0179',
	'nombre' => 'Inglés',
	'horas' => '165'
);
$modulos['HTAV3']['primero'][] = array(
	'codigo' => '0401',
	'nombre' => 'Formación y Orientación Laboral',
	'horas' => '99'
);
$modulos['HTAV3']['segundo'][] = array(
	'codigo' => '0397',
	'nombre' => 'Gestión de productos turísticos',
	'horas' => '140'
);
$modulos['HTAV3']['segundo'][] = array(
	'codigo' => '0398',
	'nombre' => 'Venta de servicios turísticos',
	'horas' => '140'
);
$modulos['HTAV3']['segundo'][] = array(
	'codigo' => '0399',
	'nombre' => 'Dirección de entidades de intermediación turística',
	'horas' => '140'
);
$modulos['HTAV3']['segundo'][] = array(
	'codigo' => '0180',
	'nombre' => 'Segunda lengua extranjera',
	'horas' => '120'
);
$modulos['HTAV3']['segundo'][] = array(
	'codigo' => '0400',
	'nombre' => 'Proyecto de agencias de viajes y gestión de eventos',
	'horas' => '50'
);
$modulos['HTAV3']['segundo'][] = array(
	'codigo' => '0402',
	'nombre' => 'Empresa e iniciativa emprendedora',
	'horas' => '60'
);
$modulos['HTAV3']['segundo'][] = array(
	'codigo' => '0403',
	'nombre' => 'Formación en Centros de Trabajo',
	'horas' => '360'
);
$modulos['HTGI3']['primero'][] = array(
	'codigo' => '0171',
	'nombre' => 'Estructura del mercado turístico',
	'horas' => '132'
);
$modulos['HTGI3']['primero'][] = array(
	'codigo' => '0172',
	'nombre' => 'Protocolo y relaciones públicas',
	'horas' => '132'
);
$modulos['HTGI3']['primero'][] = array(
	'codigo' => '0173',
	'nombre' => 'Marketing turístico',
	'horas' => '132'
);
$modulos['HTGI3']['primero'][] = array(
	'codigo' => '0383',
	'nombre' => 'Destinos turísticos',
	'horas' => '165'
);
$modulos['HTGI3']['primero'][] = array(
	'codigo' => '0384',
	'nombre' => 'Recursos turísticos',
	'horas' => '165'
);
$modulos['HTGI3']['primero'][] = array(
	'codigo' => '0179',
	'nombre' => 'Inglés',
	'horas' => '165'
);
$modulos['HTGI3']['primero'][] = array(
	'codigo' => '0389',
	'nombre' => 'Formación y Orientación Laboral',
	'horas' => '99'
);
$modulos['HTGI3']['segundo'][] = array(
	'codigo' => '0385',
	'nombre' => 'Servicios de información turística',
	'horas' => '140'
);
$modulos['HTGI3']['segundo'][] = array(
	'codigo' => '0386',
	'nombre' => 'Procesos de guía y asistencia turística',
	'horas' => '140'
);
$modulos['HTGI3']['segundo'][] = array(
	'codigo' => '0387',
	'nombre' => 'Diseño de productos turísticos',
	'horas' => '140'
);
$modulos['HTGI3']['segundo'][] = array(
	'codigo' => '0180',
	'nombre' => 'Segunda lengua extranjera',
	'horas' => '120'
);
$modulos['HTGI3']['segundo'][] = array(
	'codigo' => '0388',
	'nombre' => 'Proyecto de guía, información y asistencia turísticas',
	'horas' => '50'
);
$modulos['HTGI3']['segundo'][] = array(
	'codigo' => '0390',
	'nombre' => 'Empresa e iniciativa emprendedora',
	'horas' => '60'
);
$modulos['HTGI3']['segundo'][] = array(
	'codigo' => '0391',
	'nombre' => 'Formación en Centros de Trabajo',
	'horas' => '360'
);
$modulos['INAR3']['primero'][] = array(
	'codigo' => '0369',
	'nombre' => 'Implantación de sistemas operativos',
	'horas' => '264'
);
$modulos['INAR3']['primero'][] = array(
	'codigo' => '0370',
	'nombre' => 'Planificación y administración de redes',
	'horas' => '198'
);
$modulos['INAR3']['primero'][] = array(
	'codigo' => '0371',
	'nombre' => 'Fundamentos de hardware',
	'horas' => '99'
);
$modulos['INAR3']['primero'][] = array(
	'codigo' => '0372',
	'nombre' => 'Gestión de bases de datos',
	'horas' => '198'
);
$modulos['INAR3']['primero'][] = array(
	'codigo' => '0373',
	'nombre' => 'Lenguajes de marcas y sistemas de gestión de información',
	'horas' => '132'
);
$modulos['INAR3']['primero'][] = array(
	'codigo' => '0380',
	'nombre' => 'Formación y Orientación Laboral',
	'horas' => '99'
);
$modulos['INAR3']['segundo'][] = array(
	'codigo' => '0374',
	'nombre' => 'Administración de sistemas operativos',
	'horas' => '120'
);
$modulos['INAR3']['segundo'][] = array(
	'codigo' => '0375',
	'nombre' => 'Servicios de red e internet',
	'horas' => '120'
);
$modulos['INAR3']['segundo'][] = array(
	'codigo' => '0376',
	'nombre' => 'Implantación de aplicaciones web',
	'horas' => '100'
);
$modulos['INAR3']['segundo'][] = array(
	'codigo' => '0377',
	'nombre' => 'Administración de sistemas gestores de bases de datos',
	'horas' => '60'
);
$modulos['INAR3']['segundo'][] = array(
	'codigo' => '0378',
	'nombre' => 'Seguridad y alta disponibilidad',
	'horas' => '100'
);
$modulos['INAR3']['segundo'][] = array(
	'codigo' => '0379',
	'nombre' => 'Proyecto de administración de sistemas informáticos en red',
	'horas' => '50'
);
$modulos['INAR3']['segundo'][] = array(
	'codigo' => 'E200',
	'nombre' => 'Inglés técnico',
	'horas' => '40'
);
$modulos['INAR3']['segundo'][] = array(
	'codigo' => '0381',
	'nombre' => 'Empresa e iniciativa emprendedora',
	'horas' => '60'
);
$modulos['INAR3']['segundo'][] = array(
	'codigo' => '0382',
	'nombre' => 'Formación en Centros de Trabajo',
	'horas' => '360'
);
$modulos['INDM3']['primero'][] = array(
	'codigo' => '0483',
	'nombre' => 'Sistemas informáticos',
	'horas' => '165'
);
$modulos['INDM3']['primero'][] = array(
	'codigo' => '0484',
	'nombre' => 'Bases de datos',
	'horas' => '198'
);
$modulos['INDM3']['primero'][] = array(
	'codigo' => '0485',
	'nombre' => 'Programación',
	'horas' => '264'
);
$modulos['INDM3']['primero'][] = array(
	'codigo' => '0373',
	'nombre' => 'Lenguajes de marcas y sistemas de gestión informática',
	'horas' => '132'
);
$modulos['INDM3']['primero'][] = array(
	'codigo' => '0487',
	'nombre' => 'Entornos de desarrollo',
	'horas' => '99'
);
$modulos['INDM3']['primero'][] = array(
	'codigo' => 'E200',
	'nombre' => 'Inglés técnico',
	'horas' => '33'
);
$modulos['INDM3']['primero'][] = array(
	'codigo' => '0493',
	'nombre' => 'Formación y Orientación Laboral',
	'horas' => '99'
);
$modulos['INDM3']['segundo'][] = array(
	'codigo' => '0486',
	'nombre' => 'Acceso a datos',
	'horas' => '120'
);
$modulos['INDM3']['segundo'][] = array(
	'codigo' => '0488',
	'nombre' => 'Desarrollo de interfaces',
	'horas' => '140'
);
$modulos['INDM3']['segundo'][] = array(
	'codigo' => '0489',
	'nombre' => 'Programación multimedia y dispositivos móviles',
	'horas' => '100'
);
$modulos['INDM3']['segundo'][] = array(
	'codigo' => '0490',
	'nombre' => 'Programación de servicios y procesos',
	'horas' => '80'
);
$modulos['INDM3']['segundo'][] = array(
	'codigo' => '0491',
	'nombre' => 'Sistemas de gestión empresarial',
	'horas' => '100'
);
$modulos['INDM3']['segundo'][] = array(
	'codigo' => '0492',
	'nombre' => 'Proyecto de desarrollo de aplicaciones multiplataforma',
	'horas' => '50'
);
$modulos['INDM3']['segundo'][] = array(
	'codigo' => '0494',
	'nombre' => 'Empresa e iniciativa emprendedora',
	'horas' => '60'
);
$modulos['INDM3']['segundo'][] = array(
	'codigo' => '0495',
	'nombre' => 'Formación en Centros de Trabajo',
	'horas' => '360'
);
$modulos['INDW3']['primero'][] = array(
	'codigo' => '0483',
	'nombre' => 'Sistemas informáticos',
	'horas' => '165'
);
$modulos['INDW3']['primero'][] = array(
	'codigo' => '0484',
	'nombre' => 'Bases de datos',
	'horas' => '198'
);
$modulos['INDW3']['primero'][] = array(
	'codigo' => '0485',
	'nombre' => 'Programación',
	'horas' => '264'
);
$modulos['INDW3']['primero'][] = array(
	'codigo' => '0373',
	'nombre' => 'Lenguajes de marcas y sistemas de gestión informática',
	'horas' => '132'
);
$modulos['INDW3']['primero'][] = array(
	'codigo' => '0487',
	'nombre' => 'Entornos de desarrollo',
	'horas' => '99'
);
$modulos['INDW3']['primero'][] = array(
	'codigo' => 'E200',
	'nombre' => 'Inglés técnico',
	'horas' => '33'
);
$modulos['INDW3']['primero'][] = array(
	'codigo' => '0617',
	'nombre' => 'Formación y Orientación Laboral',
	'horas' => '99'
);
$modulos['INDW3']['segundo'][] = array(
	'codigo' => '0612',
	'nombre' => 'Desarrollo web en entorno cliente',
	'horas' => '140'
);
$modulos['INDW3']['segundo'][] = array(
	'codigo' => '0613',
	'nombre' => 'Desarrollo web en entorno servidor',
	'horas' => '180'
);
$modulos['INDW3']['segundo'][] = array(
	'codigo' => '0614',
	'nombre' => 'Despliegue de aplicaciones web',
	'horas' => '100'
);
$modulos['INDW3']['segundo'][] = array(
	'codigo' => '0615',
	'nombre' => 'Diseño de interfaces web',
	'horas' => '120'
);
$modulos['INDW3']['segundo'][] = array(
	'codigo' => '0616',
	'nombre' => 'Proyecto de desarrollo de aplicaciones web',
	'horas' => '50'
);
$modulos['INDW3']['segundo'][] = array(
	'codigo' => '0618',
	'nombre' => 'Empresa e iniciativa emprendedora',
	'horas' => '60'
);
$modulos['INDW3']['segundo'][] = array(
	'codigo' => '0619',
	'nombre' => 'Formación en Centros de Trabajo',
	'horas' => '360'
);
$modulos['INSM2']['primero'][] = array(
	'codigo' => '0221',
	'nombre' => 'Montaje y mantenimiento de equipo',
	'horas' => '231'
);
$modulos['INSM2']['primero'][] = array(
	'codigo' => '0222',
	'nombre' => 'Sistemas operativos monopuesto',
	'horas' => '165'
);
$modulos['INSM2']['primero'][] = array(
	'codigo' => '0223',
	'nombre' => 'Aplicaciones ofimáticas',
	'horas' => '231'
);
$modulos['INSM2']['primero'][] = array(
	'codigo' => '0225',
	'nombre' => 'Redes locales',
	'horas' => '231'
);
$modulos['INSM2']['primero'][] = array(
	'codigo' => '0226',
	'nombre' => 'Seguridad informática',
	'horas' => '99'
);
$modulos['INSM2']['primero'][] = array(
	'codigo' => 'E100',
	'nombre' => 'Inglés técnico',
	'horas' => '33'
);
$modulos['INSM2']['segundo'][] = array(
	'codigo' => '0224',
	'nombre' => 'Sistemas operativos en red',
	'horas' => '168'
);
$modulos['INSM2']['segundo'][] = array(
	'codigo' => '0227',
	'nombre' => 'Servicios en red',
	'horas' => '189'
);
$modulos['INSM2']['segundo'][] = array(
	'codigo' => '0228',
	'nombre' => 'Aplicaciones web',
	'horas' => '105'
);
$modulos['INSM2']['segundo'][] = array(
	'codigo' => '0230',
	'nombre' => 'Empresa e iniciativa emprendedora',
	'horas' => '63'
);
$modulos['INSM2']['segundo'][] = array(
	'codigo' => '0229',
	'nombre' => 'Formación y Orientación Laboral',
	'horas' => '105'
);
$modulos['INSM2']['segundo'][] = array(
	'codigo' => '0231',
	'nombre' => 'Formación en Centros de Trabajo',
	'horas' => '380'
);
$modulos['IMMI3']['primero'][] = array(
	'codigo' => '0120',
	'nombre' => 'Sistemas eléctricos y automáticos',
	'horas' => '198'
);
$modulos['IMMI3']['primero'][] = array(
	'codigo' => '0121',
	'nombre' => 'Equipos e instalaciones térmicas',
	'horas' => '231'
);
$modulos['IMMI3']['primero'][] = array(
	'codigo' => '0122',
	'nombre' => 'Procesos de montaje de instalaciones',
	'horas' => '231'
);
$modulos['IMMI3']['primero'][] = array(
	'codigo' => '0123',
	'nombre' => 'Representación gráfica de instalaciones',
	'horas' => '132'
);
$modulos['IMMI3']['primero'][] = array(
	'codigo' => '0124',
	'nombre' => 'Energías renovables y eficiencia energética',
	'horas' => '99'
);
$modulos['IMMI3']['primero'][] = array(
	'codigo' => '0138',
	'nombre' => 'Formación y Orientación Laboral',
	'horas' => '99'
);
$modulos['IMMI3']['segundo'][] = array(
	'codigo' => '0133',
	'nombre' => 'Gestión del montaje, de la calidad y del mantenimiento',
	'horas' => '80'
);
$modulos['IMMI3']['segundo'][] = array(
	'codigo' => '0134',
	'nombre' => 'Configuración de instalaciones térmicas y de fluidos',
	'horas' => '140'
);
$modulos['IMMI3']['segundo'][] = array(
	'codigo' => '0135',
	'nombre' => 'Mantenimiento de instalaciones frigoríficas y de climatización',
	'horas' => '140'
);
$modulos['IMMI3']['segundo'][] = array(
	'codigo' => '0136',
	'nombre' => 'Mantenimiento de instalaciones caloríficas y de fluidos',
	'horas' => '140'
);
$modulos['IMMI3']['segundo'][] = array(
	'codigo' => '0137',
	'nombre' => 'Proyecto de mantenimiento de instalaciones térmicas y de fluidos',
	'horas' => '50'
);
$modulos['IMMI3']['segundo'][] = array(
	'codigo' => 'E200',
	'nombre' => 'Inglés técnico',
	'horas' => '40'
);
$modulos['IMMI3']['segundo'][] = array(
	'codigo' => '0139',
	'nombre' => 'Empresa e iniciativa emprendedora',
	'horas' => '60'
);
$modulos['IMMI3']['segundo'][] = array(
	'codigo' => '0140',
	'nombre' => 'Formación en Centros de Trabajo',
	'horas' => '360'
);
$modulos['QULA3']['primero'][] = array(
	'codigo' => '0065',
	'nombre' => 'Muestreo y preparación de la muestra',
	'horas' => '231'
);
$modulos['QULA3']['primero'][] = array(
	'codigo' => '0066',
	'nombre' => 'Análisis químicos',
	'horas' => '297'
);
$modulos['QULA3']['primero'][] = array(
	'codigo' => '0068',
	'nombre' => 'Ensayos físicos',
	'horas' => '132'
);
$modulos['QULA3']['primero'][] = array(
	'codigo' => '0069',
	'nombre' => 'Ensayos fisicoquímicos',
	'horas' => '132'
);
$modulos['QULA3']['primero'][] = array(
	'codigo' => '0072',
	'nombre' => 'Calidad y seguridad en el laboratorio',
	'horas' => '99'
);
$modulos['QULA3']['primero'][] = array(
	'codigo' => '0074',
	'nombre' => 'Formación y Orientación Laboral',
	'horas' => '99'
);
$modulos['QULA3']['segundo'][] = array(
	'codigo' => '0067',
	'nombre' => 'Análisis instrumental',
	'horas' => '200'
);
$modulos['QULA3']['segundo'][] = array(
	'codigo' => '0070',
	'nombre' => 'Ensayos microbiológicos',
	'horas' => '180'
);
$modulos['QULA3']['segundo'][] = array(
	'codigo' => '0071',
	'nombre' => 'Ensayos biotecnológicos',
	'horas' => '120'
);
$modulos['QULA3']['segundo'][] = array(
	'codigo' => '0073',
	'nombre' => 'Proyecto de laboratorio de análisis y control de calidad',
	'horas' => '50'
);
$modulos['QULA3']['segundo'][] = array(
	'codigo' => 'E200',
	'nombre' => 'Inglés técnico',
	'horas' => '40'
);
$modulos['QULA3']['segundo'][] = array(
	'codigo' => '0075',
	'nombre' => 'Empresa e iniciativa emprendedora',
	'horas' => '60'
);
$modulos['QULA3']['segundo'][] = array(
	'codigo' => '0076',
	'nombre' => 'Formación en Centros de Trabajo',
	'horas' => '360'
);
$modulos['QUOL2']['primero'][] = array(
	'codigo' => '1249',
	'nombre' => 'Química aplicada',
	'horas' => '231'
);
$modulos['QUOL2']['primero'][] = array(
	'codigo' => '1250',
	'nombre' => 'Muestreo y operaciones unitarias de laboratorio',
	'horas' => '198'
);
$modulos['QUOL2']['primero'][] = array(
	'codigo' => '1252',
	'nombre' => 'Servicios auxiliares en el laboratorio',
	'horas' => '99'
);
$modulos['QUOL2']['primero'][] = array(
	'codigo' => '1253',
	'nombre' => 'Seguridad y organización en el laboratorio',
	'horas' => '99'
);
$modulos['QUOL2']['primero'][] = array(
	'codigo' => '1254',
	'nombre' => 'Técnicas básicas de microbiología y bioquímica',
	'horas' => '165'
);
$modulos['QUOL2']['primero'][] = array(
	'codigo' => '1257',
	'nombre' => 'Almacenamiento y distribución en el laboratorio',
	'horas' => '66'
);
$modulos['QUOL2']['primero'][] = array(
	'codigo' => '0116',
	'nombre' => 'Principios de mantenimiento electromecánico',
	'horas' => '99'
);
$modulos['QUOL2']['primero'][] = array(
	'codigo' => 'E100',
	'nombre' => 'Inglés técnico',
	'horas' => '33'
);
$modulos['QUOL2']['segundo'][] = array(
	'codigo' => '1251',
	'nombre' => 'Pruebas fisicoquímicas',
	'horas' => '147'
);
$modulos['QUOL2']['segundo'][] = array(
	'codigo' => '1255',
	'nombre' => 'Operaciones de análisis químico',
	'horas' => '231'
);
$modulos['QUOL2']['segundo'][] = array(
	'codigo' => '1256',
	'nombre' => 'Ensayos de materiales',
	'horas' => '84'
);
$modulos['QUOL2']['segundo'][] = array(
	'codigo' => '1258',
	'nombre' => 'Formación y orientación laboral',
	'horas' => '105'
);
$modulos['QUOL2']['segundo'][] = array(
	'codigo' => '1259',
	'nombre' => 'Empresa e iniciativa emprendedora',
	'horas' => '63'
);
$modulos['QUOL2']['segundo'][] = array(
	'codigo' => '1260',
	'nombre' => 'Formación en centros de trabajo',
	'horas' => '380'
);

header('Content-Type: text/html; charset=utf-8');
//print "<pre>\n".print_r($familia,true)."</pre>";
//print "<pre>\n".print_r($ciclo,true)."</pre>";
//print "<pre>\n".print_r($modulos,true)."</pre>";
?>
