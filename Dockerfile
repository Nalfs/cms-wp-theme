FROM node:8
WORKDIR C:\Users\vvhee\Documents\Projekt\ec\react\docker\file
COPY package*.json ./
RUN npm install
COPY . .
EXPOSE 3000
CMD [ "npm", "start" ]