<?php
/**
* Template Name: Platform
*
* @package WordPress
* @subpackage Raw Labs
*/

get_header();
?>

	<main class="site-main">
        <div class="block-inner" data-aos="fade-in">
            <div class="grid">
                <div class="col-10_md-12 pl-0">
                    <h2 class="page-title" data-aos="fade-in">Platform</h2>
                    RAW Labs NoDB platform makes data available for analysis without requiring any preparation, data copy or transformation, allowing query of multiple data formats and data models ranging from tabular data to complex hierarchical and multidimensional structures, all through a single SQL-like language.
                </div>
                <div class="col-7_md-12">
                
                    <div class="platform-video" data-aos="fade-up-left" data-aos-delay="100">
                        <!-- <img src="<?php echo get_stylesheet_directory_uri();?>/img/video-thumb.jpg"> -->
                        <!-- <img src="<?php echo get_stylesheet_directory_uri();?>/img/a-query.svg" class="placeholder"> -->
                        <!-- <a href="#modal-video" class="btn-watch-video modal-trigger">
                            <div class="play-button">
                                <svg>
                                    <title>Play Button</title>
                                    <polygon points="10 33 10 1 34 17"></polygon>
                                </svg>
                            </div>
                        </a> -->
                        <!-- <span>Watch Video</span> -->
                    </div>      
                </div>
            </div>
        </div>
        <div class="block-inner pt-0">
            <h3  data-aos="fade-down">Architecture</h3>
            <div class="raw-fusion-diagram">
                <div class="diagram-grid">
                    <div class="diagram-grid-box data-sources border-animation" data-aos="fade-up" >
                        <a href="#modal-data-sources" class="modal-trigger hidden-trigger" rel="tooltip" title="Click to learn more">
                            Data Sources
                        </a>
                        <div id="modal-data-sources" class="modal modal-diagram">
                            <h3>Data Sources</h3>
                            <p>RAW NoDB treats any data source as if it were a database, enabling a variety of formats and protocols to be abstracted away and queried with our RAW Query language. This means that all data sources are in play, via our RAW Data Connector API. We currently support many file formats, database stores, streams, data in cloud storage as well as being able to query APIs directly.
                                <ul>
                                    <li><b>Formats</b><br>
                                    XML, CSV, JSON, Excel, Parquet, HDF5, AVRO, HJSON, Arrow, Logs, Messages​</li>
                                    <li><b>Stores</b><br>
                                    MySQL, PostgreSQL, Oracle, DB2, MSSQL, Teradata, MongoDB, Snowflake, HDFS​</li>
                                    <li><b>Streams</b><br>
                                    Kafka, JMS, MQ</li>
                                    <li><b>Locations</b><br>
                                    AWS, Azure, GCP, Mainframe</li>
                                    <li><b>Enterprise Applications</b><br>
                                    ERP, CRM, SCM, HRM, ITSM</li>
                                    <li><b>Protocols</b><br>
                                    WS, OData, JDBC, HTTP, FTP, LDAP</li>
                                </ul>
                            </p>
                        </div>
                        <div class="border-animation__inner">
                            <div class="content-wrapper">
                                <div class="box-title">
                                    <b>Data Sources</b>
                                </div>
                                <div>
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-databases.svg"><b>DATABASES</b>
                                </div>
                                <div>
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-files.svg"><b>FILES</b>
                                </div>
                                <div>
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-data-structures.svg"><b>COMPLEX DATA STRUCTURES</b>
                                </div>
                                <div>
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-data-lake.svg"><b>DATA LAKES</b>
                                </div>
                                <div>
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-data-warehouse.svg"><b>DATA WAREHOUSES</b>
                                </div>
                                <div>
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-stream.svg"><b>DATA STREAMS</b>
                                </div>
                                <div>
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-enterprise-apps.svg"><b>ENTERPRISE APPS</b>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="diagram-grid-box clients border-animation" data-aos="fade-up" data-aos-delay="150">
                        <a href="#modal-clients" class="modal-trigger hidden-trigger" rel="tooltip" title="Click to learn more">
                            Clients
                        </a>
                        <div id="modal-clients" class="modal modal-diagram">
                            <h3>Clients</h3>
                            <p>RAW NoDB can be accessed through multiple client technologies for ease of integration with the rest of your technology stack. For example, RAW can be used interchangeably with Python, embedding RAW Queries into Python and vice-versa. Our own Web UI contains a query scratchpad, data catalog searching and navigation and administrative tools. 
                            </p>
                        </div>
                        <div class="border-animation__inner">
                            <div class="content-wrapper-horiz">
                                <div class="box-title-horiz">
                                    <b>Clients</b>
                                </div>
                                <div>
                                    Java
                                </div>
                                <div>
                                    Scala
                                </div>
                                <div>
                                    Jupyter
                                </div>
                                <div>
                                    Python
                                </div>
                                <div>
                                    RAW Web UI
                                </div>                                    
                            </div>
                        </div>
                    </div>

                    <div class="diagram-grid-box box-diagram border-animation" data-aos="fade-up" data-aos-delay="300">
                        <div class="border-animation__inner">
                            <div class="inner-diagram-title">RAW NoDB</div>
                            <div class="inner-diagram-grid">
                                <a href="#modal-rq-language" class="modal-trigger" rel="tooltip" title="Click to learn more">
                                    RAW Query Language
                                </a>
                                <div id="modal-rq-language" class="modal modal-diagram">
                                    <h3>RAW Query Language</h3>
                                    <h4>Description</h4>
                                    <p>RQL is a SQL-like functional language enhanced to support complex data structures, formats and sources across multiple locations. XML, JSON and even bespoke data formats can be queried directly as if they are databases. Packages and functions are supported, allowing views to be created for end user consumption via API, ODBC/JDBC.  RQL integrates with popular programming languages including Python, Java, Scala.  
                                    </p>
                                    <h4>Benefits</h4>
                                    <ul>
                                        <li>Access any data structure, location and data format </li>
                                        <li>One query language – no need for other tools </li>
                                        <li>Easy to use with powerful features </li>
                                    </ul>
                                </div>

                                <a href="#modal-raw-data-connectors" class="modal-trigger" rel="tooltip" title="Click to learn more">
                                    Data Connectors
                                </a>
                                <div id="modal-raw-data-connectors" class="modal modal-diagram">
                                    <h3>Data Connectors</h3>
                                    <h4>Description</h4>
                                    <p>RAW Data Connectors allow query of any source, from a database, an API, a file or data stream. Support for inferencing, type mapping and data abstraction ensures every source looks like a database. Each connector is a code generator. This approach along with granular code caching ensures optimal performance, and the open API means you can write your own connectors.</p>
                                    <h4>Benefits</h4>
                                    <ul>
                                        <li>Connect to any source, on premise or in the cloud.</li>
                                        <li>Modular system with open API to write custom connectors </li>
                                        <li>Code Generation approach brings best-in-class performance</li>
                                    </ul>
                                </div>

                                <a href="#modal-real-time-engine" class="modal-trigger" rel="tooltip" title="Click to learn more">
                                    Query Engine
                                </a>
                                <div id="modal-real-time-engine" class="modal modal-diagram">
                                    <h3>Query Engine</h3>
                                    <h4>Description</h4>
                                    <p>Query any data directly at source without up-front transformation or copy. Our unique hierarchical query engine allows complex data structures in any location to be queried, joined, filtered, sorted and grouped where tabular SQL-based queries cannot. RAW NoDB features Just-In-Time compilation, structure and format inferencing, and highly optimized low level code generation for each query – resulting in powerful, optimal, faster queries and removing unnecessary processing steps.</p>
                                    <h4>Benefits</h4>
                                    <ul>
                                        <li>Query complex data structures directly, no need to copy or transform data first.</li>
                                        <li>Just-In-Time compilation ensures optimal execution and fast results </li>
                                        <li>Highly scalable to large cluster environments</li>
                                    </ul>
                                </div>

                                <a href="#modal-smart-caching-engine" class="modal-trigger" rel="tooltip" title="Click to learn more">
                                    Smart Data Caching
                                </a>
                                <div id="modal-smart-caching-engine" class="modal modal-diagram">
                                    <h3>Smart Data Caching</h3>
                                    <h4>Description</h4>
                                    <p>Smart Data Caching works autonomously, without need to manage caches manually, and is transparent to the end user. Caches are both in-memory and persisted, with RAW NoDB caching just the data needed, ensuring both flexibility and scalability. RAW query engine decides which caching data structures to employ at run-time based on data query, structure, format, size and location, including code caching to further optimize performance. </p>
                                    <h4>Benefits</h4>
                                    <ul>
                                        <li>Zero cache administration</li>
                                        <li>Extreme performance, flexibility and scalability</li>
                                        <li>Optimal use of available resources </li>
                                    </ul>
                                </div>

                                <a href="#modal-data-catalogue" class="modal-trigger" rel="tooltip" title="Click to learn more">
                                    Data Catalog
                                </a>
                                <div id="modal-data-catalogue" class="modal modal-diagram">
                                    <h3>Data Catalog</h3>
                                    <h4>Description</h4>
                                    <p>Discover data in RAW NoDB, via our open RAW Data Catalog; automatic creation of catalog entries can be further extended with your own metadata and integrated with your enterprise data platforms via our API. Link business terms to your RAW datasets to enable faceted search, data discovery, and facilitate data governance via our automated data lineage and data usage features. </p>
                                    <h4>Benefits</h4>
                                    <ul>
                                        <li>Easily integrate with your enterprise data platforms </li>
                                        <li>Facilitate data discovery with extensible metadata</li>
                                        <li>Keep track of data lineage and usage</li>
                                    </ul>
                                </div>

                                <a href="#modal-data-output" class="modal-trigger" rel="tooltip" title="Click to learn more">
                                    Data Output Services
                                </a>
                                <div id="modal-data-output" class="modal modal-diagram">
                                    <h3>Data Output Services</h3>
                                    <h4>Description</h4>
                                    <p>RAW Output Services work similar to RAW Data Connectors, allowing output to any source, including tabular or structured data, APIs, files or data streams. Each output connector is code generated in real-time,  with granular code caching to optimize reuse and performance. Similar to the RAW Data Connectors, an open API means that you can write your own connectors to meet your enterprise needs.</p>
                                    <h4>Benefits</h4>
                                    <ul>
                                        <li>Output to any source, on premise or in the cloud</li>
                                        <li>Modular system with open API to write custom output services </li>
                                        <li>Code Generation approach optimizes resources with high performance</li> 
                                        <li>Export data in a variety of formats such as CSV, XML, SQLite, Parquet</li>
                                    </ul>
                                </div>

                                <a href="#modal-operations-services" class="modal-trigger" rel="tooltip" title="Click to learn more">
                                    Operations & Security Services
                                </a>
                                <div id="modal-operations-services" class="modal modal-diagram">
                                    <h3>Operations & Security Services</h3>
                                    <h4>Description</h4>
                                    <p>A set of services for secure and scalable execution of queries. Authentication and authorization services support pluggable modules for multiple mechanisms including Kerberos, Auth0 and OAuth. The container-based execution mechanism provides a secure and isolated environment for each user’s queries. Job scheduling and submission services provide cluster resource management, with worker nodes executing queries and coordinator nodes marshalling query results. </p>
                                    <h4>Benefits</h4>
                                    <ul>
                                        <li>Pluggable authentication and authorization modules fit your enterprise needs </li>
                                        <li>Secure and isolated execution of queries via containers</li>
                                        <li>Scale-out infrastructure across large clusters</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="arrow-diagram-left" data-aos="fade-left" data-aos-delay="600">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/arrow-diagram.svg">
                        </div>
                        <div class="arrow-diagram-right"  data-aos="fade-right" data-aos-delay="600">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/arrow-diagram.svg">
                        </div>
                    </div>

                    <div class="diagram-grid-box technology-stack border-animation" data-aos="fade-up" data-aos-delay="400">
                        <a href="#modal-technology" class="modal-trigger hidden-trigger" rel="tooltip" title="Click to learn more">
                            Technology Stack & Deployment Options
                        </a>
                        <div id="modal-technology" class="modal modal-diagram">
                            <h3>Technology Stack & Deployment Options</h3>
                            <p>RAW NoDB runs on Kubernetes, which orchestrates the container-based architecture and is available on any cloud or on-premise environment. This provides a highly isolated and massively scalable platform for the largest and most demanding data requirements. RAW also features pluggable authorization and authentication mechanisms to integrate with your enterprise security needs.  
                            </p>
                        </div>
                        <div class="border-animation__inner">
                            <div class="content-wrapper">
                                <div class="box-title">
                                    <b>Technology Stack & Deployment Options</b>
                                </div>
                            </div>
                            <div class="content-wrapper-horiz">
                                <div>
                                    <b>Security:</b>
                                </div>
                                <div>
                                    Kerberos
                                </div>
                                <div>
                                    OAuth
                                </div>                                 
                            </div>
                            <div class="content-wrapper-horiz">
                                <div>
                                    <b>Deployment:</b>
                                </div>
                                <div>
                                    Kubernetes
                                </div>                              
                            </div>
                            <div class="content-wrapper-horiz">
                                <div>
                                    <b>Hosting:</b>
                                </div>
                                <div>
                                    On Prem   ​
                                </div> 
                                <div>
                                    AWS   ​
                                </div> 
                                <div>
                                    Azure​
                                </div> 
                                <div>
                                    GCP   ​
                                </div>                              
                            </div>
                        </div>
                    </div>  

                    <div class="diagram-grid-box data-consumers border-animation" data-aos="fade-up" data-aos-delay="600">
                        <a href="#modal-data-consumers" class="modal-trigger hidden-trigger" rel="tooltip" title="Click to learn more">
                            Data Consumers
                        </a>
                        <div id="modal-data-consumers" class="modal modal-diagram">
                            <h3>Data Consumers</h3>
                            <p>Consumers access data in RAW through views, packages and functions. We support ODBC, JDBC and have custom connectors for BI tools in addition to our RAW APIs for programmatic access.</p>
                            <ul>
                                <li>Directly access RAW data from Excel spreadsheets using Power BI</li>
                                <li>Use RAW as a single query proxy to all your data accessible to your BI tools </li>
                                <li>RAW can be used inside your data science workbench </li>
                                <li>Enterprise Applications can directly consume data in RAW via our API.</li>
                            </ul>
                        </div>
                        <div class="border-animation__inner">
                            <div class="content-wrapper">
                                <div class="box-title">
                                    <b>Data Consumers</b>
                                </div>
                                <div>
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-bi-users.svg"> <b>BUSINESS INTELLIGENCE</b>
                                </div>
                                <div>
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-ai.svg"> <b>DATA SCIENCE</b>
                                </div>
                                
                                <div>
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-excel.svg"> <b>EXCEL</b>
                                </div>
                                <div>
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-enterprise-apps.svg"> <b>ENTERPRISE APPS</b>
                                </div>
                                <div>
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-web-apps.svg"> <b>DATA APPS</b>
                                </div>
                            </div>
                        </div>
                        
                    </div>  
                </div>
            </div>
        </div>
        <div class="section block-grey m-0">
    
            <div class="block-inner platform-benefits">
                <h3 data-aos="fade-up">Features and Benefits </h3>
                <!-- <div class="grid-1 ">
                    <div class="col"> -->
                        <div class="platform-benefits-block" data-aos="fade-up" data-aos-delay="150">
                            <div class="grid">
                                <div class="col-7_md-12">
                                    <div class="icon">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-check-big.svg">
                                    </div>
                                    <div class="content">
                                        <h4>RAW Query Language – a SQL-based language for any data, anywhere</h4>
                                        <p>Query and manipulate any data, with more powerful language features including packages and functions but without the overhead of the database. Abstracts away sources and formats to let you just ask questions using familiar constructs. </p>
                                    </div>
                                </div>
                                <div class="col-5_md-12">
                                    <div class="benefits-highlight">Easy to learn and use, get started in just 5 minutes.</div>
                                </div>
                            </div>
                        </div>
                        
                    <!-- </div>
                    <div class="col"> -->
                        <div class="platform-benefits-block" data-aos="fade-up" data-aos-delay="300">
                            <div class="grid">
                                <div class="col-7_md-12">
                                    <div class="icon">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-check-big.svg">  
                                    </div>
                                    <div class="content">
                                        <h4>Native support for complex data structures</h4>
                                        <p>Our unique hierarchical query engine supports nested and multi-dimensional structures, and along with RAW Query Language allows to finally query, join and manipulate all data sources in the most optimal manner. No need for scripts, multiple tools, data transformation and copy. </p>
                                    </div>
                                </div>
                                <div class="col-5_md-12">
                                    <div class="benefits-highlight">Greater utility, more power. Save up to 90% time and money and write 10x less code.</div>
                                </div>
                            </div>
                        </div>
                    
                    <!-- </div>
                    <div class="col"> -->
                        <div class="platform-benefits-block" data-aos="fade-up" data-aos-delay="450"> 
                            <div class="grid">
                                <div class="col-7_md-12">
                                    <div class="icon">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-check-big.svg">  
                                    </div>
                                    <div class="content">
                                        <h4>Adaptive and autonomous system</h4>
                                        <p>Learns from real usage: the queries being asked on the data being used form the cache automatically so that users can just ask questions on data, get results back in the fastest time, and not spend time managing the infrastructure. </p>
                                    </div>
                                </div>
                                <div class="col-5_md-12">
                                    <div class="benefits-highlight">Fastest query results including sub-second responses. Ultra-low maintenance removes need for dedicated skills. </div>
                                </div>
                            </div>
                        </div>
                        
                    <!-- </div>
                    <div class="col"> -->
                        <div class="platform-benefits-block" data-aos="fade-up" data-aos-delay="450">
                            <div class="grid">
                                <div class="col-7_md-12">
                                    <div class="icon">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-check-big.svg">  
                                    </div>
                                    <div class="content">
                                        <h4>NoDB approach features just-in-time code generation  </h4>
                                        <p>RAW NoDB can be accessed through multiple client technologies for ease of integration with the rest of your technology stack. For example, RAW can be used interchangeably with Python, embedding RAW Queries into Python and vice-versa. Run RAW directly in Jupyter Notebooks. Our own Web UI contains a query scratchpad, data catalog searching and navigation and administrative tools.  </p>
                                    </div>
                                </div>
                                <div class="col-5_md-12">
                                    <div class="benefits-highlight">10x faster time to value over ETL, and much more agile.</div>
                                </div>
                            </div>
                        </div>
                        
                    <!-- </div>
                    <div class="col"> -->
                        <div class="platform-benefits-block" data-aos="fade-up" data-aos-delay="450">
                            <div class="grid">
                                <div class="col-7_md-12">
                                    <div class="icon">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-check-big.svg">  
                                    </div>
                                    <div class="content">
                                        <h4>Built for the hybrid and multi-cloud enterprise.  </h4>
                                        <p>Suitable for both the largest and most complex enterprise data needs, our platform runs on Kubernetes across clouds or on-prem, with a pluggable security model to guarantee isolation and availability.  </p>
                                    </div>
                                </div>
                                <div class="col-5_md-12">
                                    <div class="benefits-highlight">Massively scalable and highly secure </div>
                                </div>
                            </div>
                        </div>
                        
                    <!-- </div>
                </div> -->
            </div>
        </div>
	</main><!-- #main -->

<?php
// get_template_part( 'template-parts/modal-video');
get_footer();
