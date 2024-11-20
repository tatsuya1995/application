# SchemaSpy Dockerfile

FROM openjdk:11-jre-slim

# Install required tools
RUN apt-get update && apt-get install -y wget graphviz && apt-get clean

# Download SchemaSpy
RUN wget https://github.com/schemaspy/schemaspy/releases/download/v6.1.0/schemaspy-6.1.0.jar -O /schemaspy.jar

# Download MySQL connector
RUN wget https://dev.mysql.com/get/Downloads/Connector-J/mysql-connector-java-8.0.23.tar.gz \
    && tar -xzf mysql-connector-java-8.0.23.tar.gz \
    && mv mysql-connector-java-8.0.23/mysql-connector-java-8.0.23.jar /mysql-connector-java.jar \
    && rm -rf mysql-connector-java-8.0.23 mysql-connector-java-8.0.23.tar.gz

# Copy SchemaSpy properties file
COPY schemaspy.properties /schemaspy.properties

# Run SchemaSpy
ENTRYPOINT ["java", "-jar", "/schemaspy.jar", "-configFile", "/schemaspy.properties"]