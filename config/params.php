<?php

return [
    'adminEmail' => 'noreply@colsubsidio.com',
    'errorRest' => 'A ocurrido un error intentelo mas tarde',
    'passwordResetTokenExpire' => 3600 ,// Token expira en una hora

    'connectionString' => getenv('CONNECTIONSTRINGBLOB'),
    'containerName' => getenv('CONTAINERNAME'),
    'storePath' => getenv('STOREPATH'),
    'urlBlob' => getenv('URLBLOB'),

    // 'connectionString' => getenv('CONNECTIONSTRINGBLOB') != '' && getenv('CONNECTIONSTRINGBLOB')!=null ? getenv('CONNECTIONSTRINGBLOB') :'DefaultEndpointsProtocol=https;AccountName=bscolsubsidiotest;AccountKey=1INLeStZNrhAR2zFSMUlk7Q1H5oGzsR+fSNSQY27AfVtWFlfzM2YKCUyaHkysYLHmhb57AkWknlOf30LU79sEA==',
    // 'containerName' => getenv('CONTAINERNAME') != '' && getenv('CONTAINERNAME')!=null ? getenv('CONTAINERNAME') : 'colsubsidioportalsalud',
    // 'storePath' => getenv('STOREPATH') != '' && getenv('STOREPATH')!=null ? getenv('STOREPATH') : '/uploads/store',
    // 'urlBlob' => getenv('URLBLOB') != '' && getenv('URLBLOB')!=null ? getenv('URLBLOB') : 'https://bscolsubsidiotest.blob.core.windows.net/colsubsidioportalsalud/'
];
